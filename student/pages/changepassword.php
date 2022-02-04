<?php
  session_start();  
  if(!isset($_SESSION['student'])){
  header("location: ../student/login.php");
  }
  if(isset($_POST['submit'])){
    try{
      require_once '../../connection.php';
      $current_password = $_SESSION['password'];
      $new_password = $_POST['new_password'];
      if($current_password == $_POST['current_password'] ){
           if ($_POST['new_password'] == $_POST['comfirm_password']) {
             $sql = "UPDATE student SET password = '".$new_password."' WHERE id = '".$_SESSION['student_id']."'";
             $conn->query($sql);
             $_SESSION['success'] = "password updated successfully";
			 $_SESSION['password'] = $_POST['new_password'];
           }
           else{
            $_SESSION['errors'] = "passwords do not match";
           }
       }
      else{
         $_SESSION['errors'] = "incorrect password";
      }
    }catch(PDOException $e){
      
         $_SESSION['errors'] = "Unable to update password pls try again".$e->getMessage();
     
    }
  }

   
  
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>edit profile</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="//localhost/SIMS/assets/css/font-awesome.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="//localhost/SIMS/assets/css/adminlte.css">
  <link href="//localhost/SIMS/assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="//localhost/SIMS/assets/css/dataTables.bootstrap.css">
  <link rel="stylesheet" type="text/css" href="//localhost/SIMS/assets/css/dataTables.responsive.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
   

    <!-- SEARCH FORM -->
   

    <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-slide="true" href="../logout.php">
          <i class="fa fa-key"></i> logout
        </a>
      </li>
    </ul>
   
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
     
      <!-- Sidebar Menu -->
       <?php  include "../sidebar.php"; ?>
      <!-- /.sidebar-menu -->
   

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h2 class="m-0 text-dark text-center">Change Password</h2>
             <div class="col-lg-2 pull-right">
           
             </div>
            <?php
               if(!empty($_SESSION['success'])){
                  echo '<h4 class="alert alert-success text-center">'.$_SESSION['success'].' </h4>';
                  unset($_SESSION['success']);
               }
              if(!empty($_SESSION['errors'])){
                   $error = $_SESSION['errors'];
                    echo '<h5 class = "text-center red">'.$error.'</h5>';
                    unset($_SESSION['errors']);
               }
             ?>
            
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    
       <div class="col-lg-4 col-lg-offset-4">
            <form action="changepassword.php" method="POST" enctype = "multipart/form-data">
                <div class="form-group">
                    <label for="password" class="control-label">Current Password</label>
                    <div class="">
                        <input type="password" name="current_password"  class="form-control pull-right">
                    </div>
                </div>
                 <div class="form-group">
                    <label for="password" class="control-label">New Password</label>
                    <div class="">
                        <input type="password" name="new_password"  class="form-control">
                    </div>
                </div>
                 <div class="form-group">
                    <label for="password" class="control-label">Comfirm Password</label>
                    <div class="">
                        <input type="password" name="comfirm_password"  class="form-control">
                    </div>
                </div>
                <input type="submit" class="btn btn-success" name="submit" value="save">
            </form>
       </div>
      </div><!--/. container-fluid -->
    
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer" style="margin-top: 410px">
    
    <strong>Copyright &copy; 2018 <a href="#">Ahmadu Bello University. Zaria</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery <script src="../assets/js/jquery.min.js"></script> -->
<!-- Bootstrap -->


<script type="text/javascript" src="//localhost/SIMS/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="//localhost/SIMS/assets/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="//localhost/SIMS/assets/js/bootstrap.js"></script>
<!-- AdminLTE App -->
<script src="//localhost/SIMS/assets/js/adminlte.js"></script>
<script type="text/javascript" src="//localhost/SIMS/assets/js/jquery.dataTables.min.js"></script>
<script src="//localhost/SIMS/assets/js/dataTables.bootstrap.min.js"></script>
<script src="//localhost/SIMS/assets/js/dataTables.responsive.js"></script>

<!-- OPTIONAL SCRIPTS -->

<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            //responsive: true
        });
    });
</script>

</body>
</html>
