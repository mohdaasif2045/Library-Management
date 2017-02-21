<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen"/>
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen"/>

<script language="Javascript" src="js/CalendarControl.js" ></script>
<title>Library System</title>

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
		<a href="userslist.php">USERS</a>
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
		<td>Username</td><td><input type="text" name ="user" required></td>
		<tr>
		<td>Password</td><td><input type="text" name ="pass" required></td>
		<tr>
			<td>
	<td><button name="adduser"><a class="-buttonform" ><span class="-home">Add user</span></a></button></td>
	<tr>
		<td>
	<?php
		if(isset($_POST['adduser'])){
				include("library/connection.php");
				$user = $_POST['user'];
				$pass = $_POST['pass'];
				$link=mysqli_connect("mysql12.000webhost.com","a1845030_root","kundan90","a1845030_library");
				$query="INSERT INTO user(username, password) VALUES ('$user','$pass')";
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
$link= mysqli_connect("mysql12.000webhost.com","a1845030_root","kundan90","a1845030_library");
$dbq="select * from user";
 $sql = mysqli_query($link,$dbq)
   or die('Error in query : $sql. ' .mysql_error());
   
if (mysqli_num_rows($sql) > 0) 
{            
	echo "<table border='1' cellspacing='0' cellpadding='10' class='table' width='600'>";
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


