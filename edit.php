<link rel="stylesheet" type="text/css" href="navbar.css">
<link rel="stylesheet" type="text/css" href= "edit_style.css">

<?php require_once __DIR__."/Action.php";?>

<div class="topnav">
    <a  href="http://localhost/Bookmark/">Home</a>
    <a class="active" >Edit</a>
    <a href="http://localhost/Bookmark/"><strong><?php echo $_SESSION['username']; ?></strong></a>
    <a href="http://localhost/Bookmark/">Logout</a>
    <a>BookMarks INC.</a>
  </div>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Edit Record Form</title>
</head>
<body >

<div class="header">
  	<h2>Update Bookmark</h2>
  </div>

<form action="Action.php" method="post" >
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <div class="input-group">
        <label for="Site Title">Site Title:</label>
        <input type="text" name="site_title" id="siteTitle" value = "<?php echo $title;?>" >
    </div>
    <div class="input-group">
        <label for="link">Link (Including https://) :</label>
        <input type="text" name="site_link" id="siteLink" value = "<?php echo $link;?>">
</div>
  <div class="input-group">
        <input type="submit" class="btn" value="Update" name= "update">
    </div>
</form>
</body>
</html>




