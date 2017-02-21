<?php
		include("library/connection.php");
		if(isset($_POST['updateuser'])){
				$id=$_GET['id'];
				$schno=$_POST['schno'];
				$name=$_POST['name'];
				$email=$_POST['email'];
				$username=$_POST['username'];
				$password = $_POST['password'];
				$con = mysqli_connect("localhost","root","","library_system");
				$sql="UPDATE userv set schno='$schno',name='$name',email='$email',username='$username',password='$password' 
				where id='".$id."'";
				mysqli_query($con,$sql) or die('Error');
				header("Location: userslist.php");
			}
			?>
