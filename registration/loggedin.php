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
	<title>Home</title>
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
	<h2> Welcome to mon resto!</h2>
</div>
<div class="content">
  	<!-- notification message -->
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

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Crunch your hunger,&nbsp<strong><?php echo $_SESSION['username']; ?></strong>!</p>
		<p><a href="http://localhost/monresto.com/foods.php">Order Now</a></p>
		<p>Go to <a href="http://localhost/monresto.com/">Home</a></p>
    	<p> <a href="login.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
	
</div>
		
</body>
</html>