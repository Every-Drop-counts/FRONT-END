<?php
   session_start();
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

	

</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

	

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

					
					<?php include 'login.php'  ?>
                    <?php include 'signup.php' ?>
				
					
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
					<p class="footer-company-name">All Rights Reserved. &copy; 2021 </p>
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
