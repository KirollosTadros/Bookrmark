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
            <a href="SignUp.php">Sign Up</a>
			<a class="active" href="LogIn.php">Sign In</a>
			<a>BookMarks INC.</a>
    </div>    

  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="LogIn.php">
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
  		Not yet a member? <a href="SignUp.php">Sign up</a>
  	</p>
  </form>
</body>
</html>