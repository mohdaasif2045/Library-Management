<?php
include("library/connection.php");
$id = $_GET['id'];
		$con = mysqli_connect("localhost","root","","library_system");
		$query = "Delete from userv where id=$id";
		mysqli_query($con,$query);
		header("Location: userslist.php");
?>
