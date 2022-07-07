<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>KoolLauncher | Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/favicon.png">	
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
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<center>
	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  	<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
    <p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
    </center>
  </form>
</body>
</html>