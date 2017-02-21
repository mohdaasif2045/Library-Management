<?php
include("library/connection.php");
//get the id frin delete.php 
$id_number = $_GET['id_number'];
//delete record based on selected id from delete.php
		$dbcon=mysqli_connect("localhost","root","","library_system");
		$query = "Delete from reserve_books where id_number=$id_number";
		mysqli_query($dbcon,$query);
		header("Location: reservedlist.php");
?>
