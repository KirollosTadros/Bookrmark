<link rel="stylesheet" type="text/css" href="navbar.css">
<link rel="stylesheet" type="text/css" href= "style.css">

<?php require_once __DIR__."/../Registration/Action.php";?>

<div class="topnav">
    <a  href="http://localhost/Bookmark/">Home</a>
    <a class="active" href="add.php">Add Newe Site</a>
    <a href="http://localhost/Bookmark/"><strong><?php echo $_SESSION['username']; ?></strong></a>
    <a href="http://localhost/Bookmark/">Logout</a>
    <a>BookMarks INC.</a>
</div>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<body >

<div class="header">
  	<h2>Add New Bookmark</h2>
</div>

<form action="insert.php" method="post" >
    <div class="input-group">
        <label for="Site Title">Site Title:</label>
        <input type="text" name="site_title" id="siteTitle">
    </div>
    <div class="input-group">
        <label for="link">Link (Including https://) :</label>
        <input type="text" name="site_link" id="siteLink">
    </div>
    <div class="input-group">
        <input type="submit" class="btn" value="Submit">
    </div>
</form>
</body>
</html>




