<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="imagetoolbar" content="no" />	
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
<meta name="description" content="description"/>
<meta name="keywords" content="keywords"/> 
<meta name="author" content="author"/> 
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen"/>
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen"/>

<script language="Javascript" src="js/CalendarControl.js" ></script>
<title>Library System</title>
<link rel="icon" href="img/icon2.png" type="image/x-icon" style="width:50px; height:50px">
</head>

<?php

// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
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
<font color=red>Note: 1 Book can Borrow at a time, Duplicate Student Id will not Inserted into the Reservation </font>
<br>
|  <a href="booklist.php">Book List</a> |
<br>
<br>
<hr width="600">
<strong><h1>List of Borrowers</h1></strong>
<hr width="600">
<br>
			<?php
//include("library/connection.php");

 $link= mysqli_connect("localhost","root","","library_system");
 $dbq="select * from borrowers";
 $sql = mysqli_query($link,$dbq)
   or die('Error in query : $sql. ' .mysql_error());
   
if (mysqli_num_rows($sql) > 0) 
{            
	echo "<table border='1' cellspacing='0' cellpadding='10' class='table' width='600'>";
	echo "<td>Scholar Number</td>";
	echo "<td>Name</td>";
	echo "<td>Course</td>";
	echo "<td>Year</td>";
	echo "<td>Sectiom</td>";
	echo "<td>Date Borrow</td>";
	echo "<td>Date will Return</td>";
	echo "<td>Book Title</td>";
	echo "<td>No of Copies</td>";
	echo "<td colspan='2'>Action</td>";
	
	echo "<tr>";
		

		}
else
	echo "No Borrowers Record from the Database!";				
while ($row = mysqli_fetch_array($sql))
	{
	echo "<tr>";
	echo "<td>".$row['scholar_no']."</td>";
	echo "<td>".$row['name']."</td>";
	echo "<td>".$row['course']."</td>";
	echo "<td>".$row['year']."</td>";
	echo "<td>".$row['section']."</td>";
	echo "<td>".$row['date_borrow']."</td>";
	echo "<td>".$row['date_will_return']."</td>";
	echo "<td>".$row['book_title']."</td>";
	echo "<td>".$row['no_copies']."</td>
	 <td title ='Edit'><a href=\"editborrowers.php?id_number=$row[scholar_no]\"><center><img src='img/edit.png'></center></a></td>";
	echo "<td><a href=deleteborrowers.php?id_number='".$row['scholar_no']."'><center><img src='img/delete.png'></center></a></td>";
}			 
mysqli_free_result($sql);

?>

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






   
   






