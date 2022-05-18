<?php include('server.php') ?>


<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="../css/register.css">
</head>
<body>
	<section class="nav">
	<div class="container">
	<div class="logo">
                <a href="http://localhost/monresto.com/" title="Logo">
                    <img src="../images/logo/mon resto-logos_transparent.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>
			
	</div>
	</section>

  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
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
	  <p>Go to <a href="http://localhost/monresto.com/">Home</a></p>
  </form>
</body>
</html>