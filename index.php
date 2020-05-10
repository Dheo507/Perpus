<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->



<!DOCTYPE html>
<html>

<!-- Head -->
<head>

	<title>Perpustakaan</title>

	<!-- Meta-Tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="keywords" content="Library Member Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //Meta-Tags -->

	<!-- Style --> <link rel="stylesheet" href="css/style.css" type="text/css" media="all">

	<!-- Fonts -->
		<link href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
	<!-- //Fonts -->
		<style>
			p{
				color: red;
			}
		</style>
</head>
<!-- //Head -->

<!-- Body -->
<body>

	<h1>LIBRARY MEMBER LOGIN FORM</h1>

	<div class="container w3layouts agileits">

		<div class="login w3layouts agileits">
			<h2>Sign In</h2>
			<form action="controller/dologin.php" method="post">
					<?php 
				if(isset($_GET['err']) == 1){
					echo '<p>'.$_GET['err'].'</p>';
				}
				?>
				<input type="text" Name="Username" placeholder="Username" required="">
				<input type="password" Name="Password" placeholder="Password" required="">
			
			<ul class="tick w3layouts agileits">
				<li>
					<input type="checkbox" id="brand1" value="">
					<label for="brand1"><span></span>Remember me</label>
				</li>
			</ul>
			<div class="send-button w3layouts agileits">
				
					<input type="submit"  value="Sign In">
					<a href="register.php"><input type="button" class="register-btn" value="Register"></a>
				</form>
			</div>
			<a href="#">Forgot Password?</a>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>

	</div>


</body>
<!-- //Body -->

</html>