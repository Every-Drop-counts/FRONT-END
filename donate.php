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
	<title>Donate Blood</title>
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
						<li><a class="nav-link active" href="donate.php">Donate Blood</a></li>
						<li><a class="nav-link" href="index.php#team">Emergency Cases</a></li>
						<li><a class="nav-link" href="contact_us.php">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
    <div id="gallery" class="gallery-box">
		<div class="container-fluid">
			<div id="appointment" class="appointment-main">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="title-box">
								<h2>Donation</h2>
								<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p> -->
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<div class="well-block">
								<div class="well-title">
									<h2>Donate Blood</h2>
								</div>
								<form action="donatebackend.php" method="post">
									<!-- Form start -->
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label" for="name">Name</label>
												<input id="name" name="name" type="text" placeholder="Name"
													class="form-control input-md">
											</div>
										</div>
										<!-- Text input-->
										<!-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="email">Email</label>
                                        <input id="email" name="email" type="text" placeholder="E-Mail" class="form-control input-md">
                                    </div>
                                </div> -->
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label" for="address">Address</label>
												<input id="Address" name="Address" type="text" placeholder="Address"
													class="form-control input-md">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label" for="Age">Age</label>
												<input id="Age" name="Age" type="number" placeholder="Age"
													class="form-control input-md">
											</div>
										</div>
				
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label" for="phone">Phone number:</label>
												<input type="text" id="phone" name="phone"
													 placeholder="Phone Number"
													class="form-control input-md">
											</div>
										</div>
										
										<!-- Text input-->
										<!-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="date">Request Date</label>
                                        <input id="date" name="date" type="text" placeholder="Preferred Date" class="form-control input-md">
                                    </div>
                                </div> -->
										<!-- Select Basic -->
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label" for="hospital">Hospital</label>
												<select id="hospital" name="hospital" class="form-control">
													<option value="select">Select Hospital</option>
													<option value="Grecian Super speciality Hospital">Grecian Super
														speciality Hospital</option>
													<option value="IVY Hospital">IVY Hospital</option>
													<option value="Pgimer Hospital">Pgimer Hospital</option>
													<option value="SGHS Superspeciality Hospital">SGHS Superspeciality
														Hospital</option>
													<option value="Max Super Speciality Hospital (Mohali)">Max Super
														Speciality Hospital (Mohali)</option>
													<option value="Cosmo Hospital">Cosmo Hospital</option>
												</select>
											</div>
										</div>
										<!-- Select Basic -->
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label" for="blood">Blood Type</label>
												<select id="blood" name="blood" class="form-control">
													<option value="Choose Blood">Choose Blood</option>
													<option value="A">A</option>
													<option value="B">B</option>
													<option value="AB">AB</option>
													<option value="O">O</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label" for="rh">Rh Type</label>
												<select id="rh" name="rh" class="form-control">
													<option value="Choose Blood">Choose type</option>
													<option value="Positive">Positive</option>
													<option value="Negative">Negative</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label" for="gender">Gender</label>
												<select id="gender" name="gender" class="form-control">
													<option value="Select">Select</option>
													<option value="Male">Male</option>
													<option value="Female">Female</option>
												</select>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label class="control-label" for="myfile">Upload Your Report</label>
												<input type="file" id="myfile" name="myfile">
											</div>
										</div>
										<!-- Button -->
										<div class="col-md-12">
											<div class="form-group">
												<button id="singlebutton" name="singlebutton"
													class="new-btn-d br-2">Submit</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="well-block">
								<div class="well-title">
									<h2>What happens to Blood you donate?</h2>
								</div>
								<br>
								<iframe width="600" height="400" src="https://www.youtube.com/embed/6kSLEnvDhCU"
									title="YouTube video player" frameborder="0"
									allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
									allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Gallery -->
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
