<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>KoolLauncher | Register</title>
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
  	<h2>Register</h2>
  </div>
  <center>
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
    </center>
  </form>
</body>
</html>