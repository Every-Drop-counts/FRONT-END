<?php
   session_start();
   //echo var_dump($_SESSION['loggedin']);
?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- Site Metas -->
	<title>Every Drop Counts</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Site Icons
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png"> -->

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Pogo Slider CSS -->
	<link rel="stylesheet" href="css/pogo-slider.min.css">
	<!-- Site CSS -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/custom.css">

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

	<!-- LOADER -->
	<!-- <div id="preloader">
		<div class="loader">
			<img src="images/preloader.gif" alt="" />
		</div>
    </div>end loader -->
	<!-- END LOADER -->

	<!-- Start top bar -->
	<div class="main-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="left-top">
						<a class="new-btn-d br-2" href="#"><span>Donate Blood</span></a>
						<div class="mail-b"><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>
								everydropcounts@gmail.com</a></div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="wel-nots">
						<p>Welcome to Our Website!</p>
					</div>
					<div class="my-1">

					<!-- LoginModal 
					<div class="modal fade" id="loginModal" tabindex="-1" role="dialog"
						aria-labelledby="loginModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="loginModalLabel">Login to your Account</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form>
										<div class="form-group">
											<label for="loginInputEmail1">Email address</label>
											<input type="email" class="form-control" id="loginInputEmail1" name="loginInputEmail1"
												aria-describedby="emailHelp" placeholder="Enter email">
											<small id="emailHelp" class="form-text text-muted">We'll never share your email with
												anyone else.</small>
										</div>
										<div class="form-group">
											<label for="loginInputPassword1">Password</label>
											<input type="password" class="form-control" id="loginInputPassword1" name="loginInputPassword1"
												placeholder="Password">
										</div>
								
										<button type="submit" class="btn btn-primary">Login</button>
									</form>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div> -->
					<?php include 'login.php'  ?>
                    <?php include 'signup.php' ?>
				
					<!-- SignupModal 
					<div class="modal fade" id="signupModal" tabindex="-1" role="dialog"
						aria-labelledby="signModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="signupModalLabel">Create an Account</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form action="signup.php" method="post"> 
										<div class="form-group">
											<label for="signupInputEmail1">Email address</label>
											<input type="email" class="form-control" id="signupInputEmail1" name="username"
												aria-describedby="emailHelp" placeholder="Enter email">
											<small id="emailHelp" class="form-text text-muted">We'll never share your email with
												anyone else.</small>
										</div>
										<div class="form-group">
											<label for="signupInputPassword1">Password</label>
											<input type="password" class="form-control" id="signupInputPassword1" name="password"
												placeholder="Password">
										</div>
										<div class="form-group">
											<label for="csignupInputPassword1">ConfirmPassword</label>
											<input type="password" class="form-control" id="csignupInputPassword1" name="cpassword"
												placeholder="ConfirmPassword">
										</div>
		
										<button type="submit" class="btn btn-primary">Create Account</button>
									</form>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div> -->


				</div>
					<div class="right-top">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
						</ul>
					</div>


				</div>
			</div>
		</div>
	</div>
	<!-- End top bar -->
    <?php include 'nav.php' ?>
	<!-- Start header 
	<header class="top-header">
		<nav class="navbar header-nav navbar-expand-lg">
			<div class="container">
				<a class="navbar-brand" href="index.html"><img src="images/project_logo.png" alt="image"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd"
					aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
				<div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
					<ul class="navbar-nav">
						<li><a class="nav-link active" href="#home">Home</a></li>
						<li><a class="nav-link" href="#about">About Us</a></li>
						<li><a class="nav-link" href="inventory.php">Inventory</a></li>
						<li><a class="nav-link" href="request.php">Request Blood</a></li>
						<li><a class="nav-link" href="donate.php">Donate Blood</a></li>
						<li><a class="nav-link" href="#team">Emergency Cases</a></li>
						<li><a class="nav-link" href="contact_us.php">Contact</a></li>
					</ul>

					<div class="mx-2">
						<button class="btn btn-outline-success" id ="login"data-toggle="modal"
							data-target="#loginModal">Login</button>
						<button class="btn btn-outline-success" id="signup" data-toggle="modal"
							data-target="#signupModal">SignUp</button>
						<button class="btn btn-outline-success" id="logout">Logout</button>	
						
					</div>
				</div>
			</div>
		</nav>
	</header>
	End header -->

	<!-- Start Banner -->
	<div class="ulockd-home-slider">
		<div class="container-fluid">
			<div class="row">
				<div class="pogoSlider" id="js-main-slider">
					<div class="pogoSlider-slide" data-transition="fade" data-duration="150"
						style="background-image:url(images/slider-02.jpg);">
						<div class="lbox-caption pogoSlider-slide-element">
							<div class="lbox-details">
								<h1>Welcome to Our Website</h1>
								<p>Donate your blood for a reason, let the reason to be life </p>
								<a href="contact_us.php" class="btn">Contact Us</a>
							</div>
						</div>
					</div>
					<div class="pogoSlider-slide" data-transition="fade" data-duration="150"
						style="background-image:url(images/slider-01.jpg);">
						<div class="lbox-caption pogoSlider-slide-element">
							<div class="lbox-details">
								<h1>Bring a life back to power</h1>
								<p>Blood is the most precious gift that anyone can give to another person — the gift of
									life. A decision to donate your blood can save a life, or even several if your blood
									is separated into its components — red cells, platelets and plasma — which can be
									used individually for patients with specific conditions.</p>
								<a href="donate.php" class="btn">Donate Blood</a>
							</div>
						</div>
					</div>
					<div class="pogoSlider-slide" data-transition="fade" data-duration="150"
						style="background-image:url(images/slider-03.jpg);">
						<div class="lbox-caption pogoSlider-slide-element">
							<div class="lbox-details">
								<h1>Be Kind To Help The Needy.</h1>
								<p> The WHO estimates that blood donation by 1% of the population is generally the
									minimum to meet a nation’s most basic need for blood. </p>
								<a href="#team" class="btn">Emergency Cases</a>
							</div>
						</div>

					</div>
				</div><!-- .pogoSlider -->
			</div>
		</div>
	</div>
	<!-- End Banner -->

	<!-- Start About us -->
	<div id="about" class="about-box">
		<div class="about-a1">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title-box">
							<h2>About Us</h2>
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p> -->
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="row align-items-center about-main-info">
							<div class="col-lg-6 col-md-6 col-sm-12">
								<h2> Welcome to Every Drop Counts </h2>
								<p>"Every drop counts" is a network that brings voluntary blood donors and those in need
									of blood on to a common online forum.With this website as an intermediate , we look
									up for donors who are pleased and willing to donate blood coupled with providing the
									prompt support to those in acute need of it
								</p>
								<ul>
									<li>
										Our mission is to carry out every blood request in the initially decided
										perimeter of chandigarh with a potential and optimistic web portal and motivated
										volunteers to donate blood.
									</li> <br>
									<li>
										Our vision is to be “The hope of every Indian in search of a voluntary blood
										donor”
									</li><br>
									<li>

										Our motto - “Donate blood to save the most precious human life”
									</li>
								</ul>
								<!-- <a href="#" class="new-btn-d br-2">Read More</a> -->
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="about-m">
									<ul id="banner">
										<li>
											<img src="images/about-img-01.jpg" alt="">
										</li>
										<li>
											<img src="images/about-img-02.jpg" alt="">
										</li>
										<li>
											<img src="images/about-img-03.jpg" alt="">
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About us -->


	<!-- Start Team -->
	<div id="team" class="team-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Emergency Cases</h2>
						<p>Every day 12,000 people in India die due to the sheer lack of donated blood. India collects
							11 million units of blood but needs 15 million units, so there’s a deficit of 4 million
							units. Over 40 districts in India don’t have a single blood bank. </p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="our-team">
						<div class="pic">
							<img src="images/img-1.jfif" alt="">
						</div>
						<div class="team-content">
							<h3 class="title">Karan</h3>
							<span class="post">Age:17<br>Pgimer sector-12</span><br>
							<span class="post">Blood:A+<br> Contact:9999999</span>
							<!-- <ul class="social">
								 <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li> 
								<li>blood- A+</li>
								<li>Contact- 9999999999</li>
							</ul> -->
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6">
					<div class="our-team">
						<div class="pic">
							<img src="images/img-2.jpg" alt="">
						</div>
						<div class="team-content">
							<h3 class="title">Kevin</h3>
							<span class="post">Age:47<br>Pgimer sector-12</span><br>
							<span class="post">Blood:B+<br> Contact:98989999</span>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6">
					<div class="our-team">
						<div class="pic">
							<img src="images/img-3.jfif" alt="">
						</div>
						<div class="team-content">
							<h3 class="title">Steve Thomas</h3>
							<span class="post">Age:57<br>IVY hospital</span><br>
							<span class="post">Blood:AB+<br> Contact:999998799</span>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- End Team -->


	<!-- Start Footer -->
	<footer class="footer-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">Health Lab</a> Design By
						: <a href="https://html.design/">html design</a></p>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer -->

	<a href="#" id="scroll-to-top" class="new-btn-d br-2"><i class="fa fa-angle-up"></i></a>

	<!-- ALL JS FILES -->
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- ALL PLUGINS -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/jquery.pogo-slider.min.js"></script>
	<script src="js/slider-index.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/TweenMax.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/form-validator.min.js"></script>
	<script src="js/contact-form-script.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/custom.js"></script>
</body>

</html>