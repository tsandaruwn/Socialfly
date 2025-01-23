<?php include('jobserver.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>login of SocialFly </title>
  <link rel="stylesheet" type="text/css" href="jobstyle.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="joblogin.php">
  	<?php include('joberrors.php'); ?>
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
  		Not yet a member? <a href="jobregister.php">Sign up</a>
  	</p>
  </form>
</body>
</html>