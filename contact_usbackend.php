<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>Contact Us</title>
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
<header class="top-header">
<div class="main-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-top">
                        <a class="new-btn-d br-2" href="donate.html"><span>Donate Blood</span></a>
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
</body>


<?php
include_once "_dbconnect.php";

$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];
$message=$_POST['message'];

$q="INSERT INTO `feedback` (`name`, `email`, `number`, `message`) VALUES ( '$name', '$email', '$number', '$message');";

$quer=mysqli_query($conn, $q);
if($quer)
{
    echo '<br> <div class="alert alert-success" role="alert">
    <h2 class="alert-heading">Successfully Submitted</h2>
    <p>Thank you for getting in touch!</p>
    <hr>
    <p class="mb-0"></p>
  </div>';
}
else
{
    echo '<br> <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Due to some issue we are not able to submit your form. Please fill it again!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
?>