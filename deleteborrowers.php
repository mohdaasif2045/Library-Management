<?php
//include("library/connection.php");
//get the id frin delete.php 
$link= mysqli_connect("localhost","root","","library_system");
$scholar_no = $_GET['scholar_no'];
//delete record based on selected id from delete.php
		$query = "Delete from borrowers where scholar_no=$scholar_no";
		mysqli_query($link,$query);
		header("Location: listofborrowers.php");	
?>
