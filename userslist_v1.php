<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen"/>
<script language="Javascript" src="../js/CalendarControl.js" ></script>
<title>Library System</title>
<link rel="icon" href="img/icon2.png" type="image/x-icon" style="width:50px; height:50px">
</head>

<?php
session_start();
if (!isset($_SESSION['username'])) {
header('Location: login_admin.php');
}
?>

<body>

</div>

<div class="container">	
<?php
	include("library/header.php");
?>
<div class="navigation">
		<a href="index.php">HOME</a>
		<a href="reservedlist.php">RESERVED LIST</a>
		<a href="returnbook.php">RETURN BOOK</a>
		<a href="books.php">BOOKS</a>
		<a href="userslist_v1.php">USERS</a>
		<a href="logout.php">LOGOUT</a>
		<div class="clearer"><span></span></div>
	</div>
	<div class="main">		
		
		<div class="content">
			<div class="node">
			<div class="menu">
<form class="adduserform" method="POST">
	<table>
		<td colspan="2"><strong><h3><center>Add User Account</center></h3></td>
        <tr>
		<td>Scholar Number</td><td><input type="text" name ="roll" required></td>
		<tr>
        <tr>
		<td>Name</td><td><input type="text" name ="name" required></td>
		<tr>
        <tr>
		<td>Email Id</td><td><input type="text" name ="email" required></td>
		<tr>
		<tr>
		<td>Username</td><td><input type="text" name ="user" required></td>
		<tr>
		<td>Password</td><td><input type="password" name ="pass" required></td>
		<tr>
			<td>
	<td><button name="adduser"><a class="-buttonform" ><span class="-home">Add user</span></a></button></td>
	<tr>
		<td>
	<?php
		if(isset($_POST['adduser'])){
				include("library/connection.php");
				
				$roll=$_POST['roll'];
				$name=$_POST['name'];
				$email=$_POST['email'];
				$user=$_POST['user'];
				$pass=$_POST['pass'];
				$link=mysqli_connect("localhost","root","","library_system");
				$query="INSERT INTO userv(Scholar,name,email,username, password) VALUES ('$roll','$name','$email','$user','$pass')";
					mysqli_query($link,$query);
					if($query){
						echo "<font color='red'><blink>User Inserted!</blink></font>";
					}
					else
					echo "User Connot Insert!";
				}
	?>
	</td>
	</table>
	</form>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<hr width="625">
<strong><h1>List of User Accounts</h1></strong>
<hr width="625">
<br>

<?php
include("library/connection.php");
$link= mysqli_connect("localhost","root","","library_system");
$dbq="select * from userv";
 $sql = mysqli_query($link,$dbq)
   or die('Error in query : $sql. ' .mysql_error());
   
if (mysqli_num_rows($sql) > 0) 
{            
	echo "<table border='1' cellspacing='0' cellpadding='10' class='table' width='600'>";
	echo "<td>Scholar Number</td>";
	echo "<td>Name</td>";
	echo "<td>Email</td>";
	echo "<td>Username</td>";
	echo "<td>Password</td>";
	echo "<td colspan='2'>Action</td>";
	echo "<tr>";
		}
else
	echo "No User Record form the Database!";	 
						
while ($row = mysqli_fetch_array($sql))
	{
	echo "<tr>";
	echo "<td>".$row['Scholar']."</td>";
	echo "<td>".$row['name']."</td>";
	echo "<td>".$row['email']."</td>";
	echo "<td>".$row['username']."</td>";
	echo "<td>".$row['password']."</td>";
	echo "<td title ='Edit'><a href=\"edituser.php?id=$row[id]\"><center><img src='img/edit.png'></center></a></td>
	<td title ='Delete'><a href=\"deleteuser.php?id=$row[id]\"><center><img src='img/delete.png'></center></a></td>";
}	

mysqli_free_result($sql);

?>
			</table>	
	</div>
	</div>
	  </div>
	  


<div class="sidenav">
		<div class="right-menu">
		<h2>Calendar</h2>
		</div>
	<div class="right-content">
		<?php include("library/calendar.php");?>
</table>
</td>
</tr>

</table>


	</div>
	
</div>
	
		<div class="clearer"><span></span></div>

	</div>

	
		<div class="clearer"><span></span></div>
<footer>	
		
	</footer>
	</div>

</div>

</body>

</html>


