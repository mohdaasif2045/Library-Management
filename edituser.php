<html >
<head>
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen"/>
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen"/>

<script language="Javascript" src="js/CalendarControl.js" ></script>
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
	<div class="main">		
		
		<div class="navigation">
		<a href="index.php">HOME</a>
		<a href="reservedlist.php">RESERVED LIST</a>
		<a href="returnbook.php">RETURN BOOK</a>
		<a href="books.php">BOOKS</a>
		<a href="userslist_v1.php">USERS</a>
		<a href="logout.php">LOGOUT</a>
		<div class="clearer"><span></span></div>
	</div>
		
		<div class="content">
			<div class="node">
			<div class="menu">
	<button name="listofborrowers" class="but">|<a href="userslist.php">List of Users</a>|</button>
	<br>
	<br>
<?php
	include("library/connection.php");
	$con = mysqli_connect("localhost","root","","library_system");
	$query = "SELECT * FROM user where id=$_GET[id]";
	$result = mysqli_query($con,$query);
	while($rows = mysqli_fetch_array($result))
	{	
		$id = $rows['id'];
		$username = $rows['username'];
		$password = $rows['password'];		
	}	
?>
<hr width="600">
<strong><h1>Edit User</h1></strong>
<hr width="600">
<table cellspacing="6">
<form class="form" action="updateuser.php?id=<?php echo $id?>" method="POST">
	<td>Username</td>
	<td><input type="text" name="username" value='<?php echo $username?>' required></td>
	<tr>
	<td>Password</td>
	<td><input type="text" name="password" value='<?php echo $password?>' required></td>
	<tr>
		<td>
	<td><button name="updateuser"><a class="-buttonform" ><span class="">Update</span></a></button></td>
	<tr>
	<td>
	</td>
	</form>
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
