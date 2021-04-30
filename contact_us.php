<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
	
    header("location: index.php");
    exit;
}
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
	<title>Contact-Us</title>
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
					
				</div>
			</div>
		</div>
	</div>
	<!-- End top bar -->

	<!-- Start header -->
	<header class="top-header">
		<nav class="navbar header-nav navbar-expand-lg">
			<div class="container">
				<a class="navbar-brand" href="index.php"><img src="images/project_logo.png" alt="image"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd"
					aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
				<div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
					<ul class="navbar-nav">
						<li><a class="nav-link" href="index.php">Home</a></li>
						<li><a class="nav-link" href="index.php#about">About Us</a></li>
						<li><a class="nav-link" href="inventory.php">Inventory</a></li>
						<li><a class="nav-link" href="request.php">Request Blood</a></li>
						<li><a class="nav-link" href="donate.php">Donate Blood</a></li>
						<li><a class="nav-link" href="index.php#team">Emergency Cases</a></li>
						<li><a class="nav-link active" href="contact_us.php">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
<!-- Start Contact -->
<div id="contact" class="contact-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-box">
                    <h2>Contact us</h2>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-12 col-xs-12">
                <div class="contact-block">
                    <form  action="contact_usbackend.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Your Name" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" placeholder="Your Email" id="email" class="form-control"
                                        name="email" required data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Your number" id="number" class="form-control"
                                        name="number" required data-error="Please enter your number">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" id="message" name="message" placeholder="Your Message" rows="8"
                                        data-error="Write your message" required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="submit-button text-center">
                                    <button class="btn btn-common" id="submit" type="submit">Send Message</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <div class="col-lg-12 col-xs-12">
                <div class="left-contact">
                    <h2>Address</h2>
                    <div class="media cont-line">
                        <div class="media-left icon-b">
                            <i class="fa fa-location-arrow" aria-hidden="true"></i>
                        </div>
                        <div class="media-body dit-right">
                            <h4>Address</h4>
                            <p>PEC CHANDIGARH PINCODE:160012</p>
                        </div>
                    </div>
                    <div class="media cont-line">
                        <div class="media-left icon-b">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="media-body dit-right">
                            <h4>Email</h4>
                            <a href="#">everydropcounts@gmail.com</a><br>
                        </div>
                    </div>
                    <div class="media cont-line">
                        <div class="media-left icon-b">
                            <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                        </div>
                        <div class="media-body dit-right">
                            <h4>Phone Number</h4>
                            <a href="#">12345 67890</a><br>
                       </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- End Contact -->


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
