<?php
require "DataBase/Connection.php";
?>

<link rel="stylesheet" type="text/css" href="navbar.css">
<link rel="stylesheet" type="text/css" href="style.css">
<?php   session_start();

if (!isset($_SESSION['username'])) : ?>
        <div class="topnav">
            <a class="active" href="index.php">Home</a>
            <a href="Registration/SignUp.php">Sign Up</a>
            <a href="Registration/LogIn.php">Sign In</a>
            <a>BookMarks INC.</a>
        </div>
<?php endif ?>

<?php if (isset($_GET['logout'])) : 
            session_destroy();
            unset($_SESSION['username']); ?>
            <div class="topnav">
                <a class="active" href="index.php">Home</a>
                <a href="Registration/SignUp.php">Sign Up</a>
                <a href="Registration/LogIn.php">Sign In</a>
                <a>BookMarks INC.</a>
            </div>

<?php endif?>
<html>
<div class="content">

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
        <div class="topnav">
            <a class="active" href="index.php">Home</a>
            <a href="AddNewSite/add.php">Add Newe Site</a>
            <a href="index.php"><strong><?php echo $_SESSION['username']; ?></strong></a>
            <a href="index.php?logout='1'" >Logout</a>
            <a>BookMarks INC.</a>
        </div>

  
       
            
    <?php endif ?>
</div>
	<center><h1>Welcome to the best bookmarking website ever!</h1></center>	
</body>
</html>



<?php
 if (!isset($_SESSION['username']))
 {
    echo "<table class='gfg center'>";

    $result = mysqli_query($conn,"SELECT * FROM sites");

    while($row = mysqli_fetch_array($result))
    {
    echo "<tr>";
    echo "<td><a href='".$row['link']."'target=_'blank' rel='noopener noreferrer'>".$row['title']."</a?</td>";
    echo "</tr>";
    }
    echo "</table>";
 }


 if (isset($_SESSION['username']))
 {
    echo "<table class='gfg center'>";

    $result = mysqli_query($conn,"SELECT * FROM ".$_SESSION['username']."_sites");
    while($row = mysqli_fetch_array($result))
    {
    echo "<tr>";
    echo "<td><a href='".$row['link']."'target=_'blank' rel='noopener noreferrer'>".$row['title']."</a?</td>";
    
    
        echo"<td>";
		echo"<a href='edit.php?edit=".$row['id']."' class='edit_btn' >Edit</a>";
		echo "</td>";
		echo "<td>";
		echo "<a href='Action.php?del=".$row['id']."' class='del_btn'>Delete</a>";
		echo "</td>";
    echo "</tr>";
    }
    echo "</table>";
 }
?>


