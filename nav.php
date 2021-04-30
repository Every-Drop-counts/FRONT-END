<?php 
//session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
 {
	$loggedin= true;
  }
  else{
	$loggedin = false;
  }
echo'
<!-- Start header -->
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
                        <li><a class="nav-link active" href="index.php">Home</a></li>
						<li><a class="nav-link" href="index.php#about">About Us</a></li>
						<li><a class="nav-link" href="inventory.php">Inventory</a></li>
						<li><a class="nav-link" href="request.php">Request Blood</a></li>
						<li><a class="nav-link" href="donate.php">Donate Blood</a></li>
						<li><a class="nav-link" href="index.php#team">Emergency Cases</a></li>
						<li><a class="nav-link" href="contact_us.php">Contact</a></li>
					</ul> ' ;
                    
                    if (!$loggedin)
                    {
                    echo '
					<div class="mx-2">
						<button class="btn btn-outline-success" id ="login"data-toggle="modal"
							data-target="#loginModal">Login</button>
						<button class="btn btn-outline-success" id="signup" data-toggle="modal"
							data-target="#signupModal">SignUp</button> ';
                    }
                    if($loggedin)
                    {
                     echo '       
						<button class="btn btn-outline-success" id="logout">
						<a href="logout.php" >Logout</a></button>	';
                    }

                    echo'
						
					</div>
				</div>
			</div>
		</nav>
	</header>
<!-- End header -->
    ';

	
?>