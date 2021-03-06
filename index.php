<?php 
  session_start(); 
 
  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: lg.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: lg.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
<div class="header">
    <h1>Home Page</h1>
</div>
<div class="content">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h2>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h2>
      </div>
    <?php endif ?>
 
    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
        <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <p> <a href="display.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
        
</body>
</html>