<?php include('Action.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="navbar.css">

</head>
<body>
    <div class="topnav">
            <a  href="http://localhost/Bookmark/">Home</a>
            <a class="active" href="SignUp.php">Sign Up</a>
			<a  href="LogIn.php">Sign In</a>
			<a>BookMarks INC.</a>
    </div> 
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="Action.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email">
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
  		Already a member? <a href="LogIn.php">Sign in</a>
  	</p>
  </form>
</body>
</html>