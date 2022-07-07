<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="en-us" class="no-js">
	<head>
		<meta charset="utf-8">
        <title>Your mc name here</title>
        <meta content="McLauncher" name="description">
        <meta content="Minecraft, Server, Website, PORTAL!, KoolKid, koollauncher, Romaina" name="keywords">
        <meta name="description" content="Thanks for using KoolLauncherV3 By KoolKid you can edit this in index.php">
        <meta property="og:url" content="https://kool-kid.xyz">
        <meta property="og:image" content="https://kool-kid.xyz/img/favicon.png">
        <meta name="twitter:image" content="https://kool-kid.xyz/img/favicon.png">
        <meta property="og:site_name" content="KoolLauncherWeb">
        <meta name="author" content="KoolKidDev"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="KoolKidDev">
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <link rel="stylesheet" href="css/font-awesome.css" />
        <link rel="shortcut icon" href="img/favicon.png">
        <link rel="stylesheet" href="css/style.css" />		
	</head>	
	<body>
		<div id="loading">
			<div id="preloader">
				<span></span>
				<span></span>
			</div>
		</div>
		<div class="global-overlay">
			<div class="overlay skew-part">
				<div id='stars'></div>
				<div id='stars2'></div>
				<div id='stars3'></div>
			</div>
		</div>
		<section id="left-side">
			<img src="img/logo.png" alt="" class="brand-logo" />
			<div class="content">
			<?php  if (isset($_SESSION['username'])) : ?>	
			<h1 class="text-intro opacity-0">Your mc name here!<br></h1>
			<?php endif ?>
				<p class="text-intro opacity-0">Welcome <?php echo $_SESSION['username'];?>!</p>
				<br>			
				<nav>
					<ul>
						<li>
							<a href="index.php?logout='1'" class="light-btn text-intro animated-middle fadeInUp">Logout</a>
						</li>
						&nbsp; 	&nbsp; 
						<li>
							<a href="http://localhost/koolweb/KoolLauncher.exe" class="action-btn trigger text-intro animated-middle fadeInUp">Download</a>
						</li> 
						&nbsp; 	&nbsp; 						
					</ul>
				</nav>
			</div>
			<div class="social-icons">
			</div>
		</section>
			<footer>
				<p style="color:white">Copyright 2022 KoolKidDevelopment</p>
			</footer>
		</section>
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easings.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/velocity.min.js"></script> 
	<script src="js/velocity.ui.min.js"></script> 
	<script src="js/vegas.js"></script>
	<script src="js/main.js"></script>
	<script src="js/status.js"></script>	
	</body>
</html>