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
<html>
<head>
	<title>KoolLauncher | Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
  <meta content="McLauncher" name="description">
  <meta content="Minecraft, Server, Website, PORTAL!, KoolKid, koollauncher, Romaina" name="keywords">
  <meta name="description" content="Thanks for using KoolLauncherV3 By KoolKid you can edit this in index.php">
  <meta property="og:url" content="https://kool-kid.xyz">
  <meta property="og:image" content="https://kool-kid.xyz/img/favicon.png">
  <meta name="twitter:image" content="https://kool-kid.xyz/img/favicon.png">
  <meta property="og:site_name" content="KoolLauncherWeb">
  <meta name="author" content="KoolKidDev"> 
</head>
<body>

<div class="header">
	<h2>KoolLauncher</h2>
</div>
<div class="content">  	
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
    <?php  if (isset($_SESSION['username'])) : ?>
    	<center><p>Welcome <strong><?php echo $_SESSION['username']; ?></strong>!</p>
      <center><p> <a href="http://localhost/koolweb/KoolLauncher.exe">Download The Launcher</a> </p></center>
    	<center><p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p></center>
      
    	
    
     </form>

    <?php endif ?>
</div>
  <div class="header">
       <center><h2>Announcements</h2></center> 
 </div>
 <div class="content">	
   <center>
     <p>Hello you can edit this in index.php</p>
     <p>You can add as many announcements as you want!</p>
   </center>
 </div>

</div>
  <div class="header">
       <center><h2>ChangeLogs</h2></center> 
 </div>
 <div class="content">	
   <center>
     <p>Hello you can edit this in index.php</p>
   </center>
 </div>
</body>
</html>