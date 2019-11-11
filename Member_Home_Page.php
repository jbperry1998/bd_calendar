<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Member Home Page - HooCooks</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<?php
        session_start();
        $login_status = $_SESSION['logged_in'];
        if(!strcmp( $login_status, "logged_in" ) == 0) {
            header('Location: elements.html');
        } ?>
	</head>
	<body class="is-preload"> 
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<nav id="nav">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="generic.html">About Us</a></li>
							<li><a href="contact.html">Contact Us</a></li>
							<li><a href="product.html">Products</a></li>
							<li><a href="Member_Home_Page.php">Member Page</a></li>
							<li><a href="log_out.php" class="button">Log Out</a></li>
						</ul>
					</nav>
				</header>

<!-- Banner -->
				<section id="banner">
					<header>
						<h2>Welcome to HooCooks!</h2>
						
					</header>
				</section>

			<!-- Main -->
			<section id="main" class="container">
					<div class="row">
						<div class="col-12">

							<!-- Text -->
							</div>
							</div>
							<a href="signup.html" class="button">Sign Up Now</a>
				</section>
							</div>

	</body>
</html>