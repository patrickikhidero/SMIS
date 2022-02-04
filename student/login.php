<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="en">
<head>
<title>FSMIS</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Account Register Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="../assets/css/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
<link rel="stylesheet" href="../assets/css/font-awesome.css">
<link href="//localhost/SIMS/assets/css/bootstrap.min.css" rel="stylesheet"><!-- Font-Awesome-Icons-CSS -->
<link href="//fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,devanagari,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">

<!-- //css files -->
</head>

<body style="background: #3CB371;">
<!-- main -->
<div class="w3ls-header">
	<h1 style="color: white">FSMIS Student Dashboard</h1>
	<div class="header-main">
		<h2>login to continue</h2>
		<?php
            session_start();
            if(isset($_SESSION['errors'])){
            	echo "<h4 class = 'alert alert-danger'>".$_SESSION['errors']."</h4>";
            	unset($_SESSION['errors']);
            }
		?>
			<div class="header-bottom">
				<div class="header-right w3agile">
					<div class="header-left-bottom agileinfo">
						<form action="handlers/loginHandler.php" method="post">
							<div class="icon1">
								<i class="fa fa-user" aria-hidden="true"></i>
								<input  type="text" placeholder="username" name="reg_no" required/>
							</div>
							<div class="icon1">
								<i class="fa fa-lock" aria-hidden="true"></i>
								<input type="password" placeholder="Password" name="password" required/>
							</div>

							<div class="bottom">
								<input type="submit" name="submit" value="submit"  />

<button>	<a href="/SIMS/admin/login.php">Admin Login</a>	</button>
							</div>


</div>
					</form>
					</div>
				</div>
			</div>
	</div>
</div>
<!--header end here-->
<!-- copyright start here -->
<div class="copyright">
	<p>© 2021 Foreign Student Management Information System. All rights reserved</p>
</div>
<!--copyright end here-->
</body>
</html>
