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
						<h2>Edit This</h2>
						
					</header>
					<p>and this</p>
				</section>

			<!-- Main -->
			<section id="main" class="container">
					<div class="row">
						<div class="col-12">

							<!-- Text -->
								<section class="box">
									<h3>Why did we start HooCooks?</h3>
									<p>We saw the need to teach college students 
										not just how to cook, but how to budget,
										 groceryshop, and create a balanced diet all on their own.</p>
									<hr />	
							
									</section>
								<section class="box">
									<h4>James Perry (co-founder)</h4>
									<blockquote>"We just wanted to show our peers that, like they say in Ratatouille, anyone can cook. Not only can anyone cook, but cooking for yourself can actually be a cheaper and healthier option than most people realize."</blockquote>
								</section>
								<section class="box">	
									<header>
										<h3>Where did we come from?</h3>
									</header>
									<p>The three of us met in an E-Commerce class where we worked on this project. We saw a need and decided to try and fill that need by creating a service for our peers. </p>
									<hr />

								</section>
								<section class="box">
									<h3><i> Not Your Average Meal Plan</i></h3>
									<p>We wanted to give students a healthy and cheap alternative to the normal meal plans that are available to them and show them that when you are organized and knowledgible, cooking can be fun. </p>
									<hr />
								</section>
							</div>
							</div>
							<a href="signup.html" class="button">Sign Up Now</a>
							</section>
							</div>

	</body>
</html>