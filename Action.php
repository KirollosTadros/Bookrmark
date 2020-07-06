<?php 
    require_once __DIR__."/DataBase/Connection.php";
    require_once __DIR__."/Registration/Action.php";

	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($conn, "SELECT * FROM ".$_SESSION['username']."_sites WHERE id=$id");

		$n = mysqli_fetch_array($record);
		$title = $n['title'];
		$link = $n['link'];
		
    }
  

    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        echo "$id";
        mysqli_query($conn, "DELETE FROM ".$_SESSION['username']."_sites WHERE id=$id");
        header('location: http://localhost/Bookmark/');
    }

    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        echo $id;
        $title = $_POST['site_title'];
        $link = $_POST['site_link'];
        echo $title;
        mysqli_query($conn, "UPDATE ".$_SESSION['username']."_sites  SET title='$title', link='$link' WHERE id=$id");
        header('location: http://localhost/Bookmark/');
    }
?>