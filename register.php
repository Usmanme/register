<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="reg.css">
</head>
<body>
	<div class ="wrapper">
  	<h1>Register</h1>
<hr>   

  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input"> 
  	  <input type="text" name="username" placeholder="Name" value="<?php echo $username; ?>">
  	</div>
  	<div class="input">
  	  
  	  <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input">

  	  <input type="password" placeholder="Password" name="password_1">
  	</div>
  	<div class="inputp">

  	  <input type="password" name="password_2" placeholder="Confirm Password">
  	</div>
  	<div class="button">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="lg.php">Sign in</a>
  	</p>
	  </div>
  </form>

</body>
</html>