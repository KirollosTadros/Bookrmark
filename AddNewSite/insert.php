<?php
require_once __DIR__."/../DataBase/Connection.php";
require_once __DIR__."/../Registration/Action.php";

$site_title = mysqli_real_escape_string($conn, $_REQUEST['site_title']);
$site_link = mysqli_real_escape_string($conn, $_REQUEST['site_link']);

$sql = "SELECT MAX(id) as max_id FROM ".$_SESSION['username']."_sites";  
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$id = $row['max_id'] + 1;
// Attempt insert query execution
$username = $_SESSION["username"];
$sql = "INSERT INTO ".$_SESSION['username']."_sites (id, title, link) VALUES ('$id', '$site_title', '$site_link')";

if(mysqli_query($conn, $sql)){
    header("Location:http://localhost/Bookmark/");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

?>