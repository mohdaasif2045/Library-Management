<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>MANIT LIBRARY</title>
<link href="css/user_css.css" rel="stylesheet" type="text/css">
</head>
<?php

// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) {
header('Location: login_usr.php');
}
?>
<body style="background-image:url(img/WebDesignBooks2.jpg);">
<div id="Holder">
	<div id="Logo"></div>
    <div id="Nav">
		<ul>
	 	 <li><a href="official.php">Home</a></li>
	 	 <li><a href="book_usr.php">Books</a></li>
	  	 <li><a href="returnbook_usr.php">Return Book</a></li>
	 	 <li><a href="logout_usr.php">Logout</a></li>
 		 </ul>
  	</div>
	<div id="Main">
    <?php
			include('library/connection.php');
			echo "<table border=1 id='tab' width='100%' cellapdding=10 cellspacing=0>";
			$link= mysqli_connect("localhost","root","","library_system");
			$dbq="select * from borrowers";
			$locate =mysqli_query($link,$dbq);
		if (mysqli_num_rows($locate) > 0){
			echo "<tr>";
			echo "<th>Scholar Numbar</th>";
			echo "<th>Name</th>";
			echo "<th>Course</th>";
			echo "<th>Year</th>";
			echo "<th>Section</th>";
			echo "<th>Borrowed Date</th>";
			echo "<th>Date to Return</th>";
			echo "<th>Book Title</th>";
			echo "<th>Copies</th>";
			echo "<th>Return</th>";
			echo "</tr>";
		}
		else{
			echo "No current list of borrowers";
		}
			while($rows=mysqli_fetch_array($locate)){
				echo "<tr>";
				echo "<td>".$rows['scholar_no']."</td>";
				echo "<td>".$rows['name']."</td>";
				echo "<td>".$rows['course']."</td>";
				echo "<td>".$rows['year']."</td>";
				echo "<td>".$rows['section']."</td>";
				echo "<td>".$rows['date_borrow']."</td>";
				echo "<td>".$rows['date_will_return']."</td>";
				echo "<td>".$rows['book_title']."</td>";
				echo "<td>".$rows['no_copies']."</td>";
				echo "<td title=Return><a href='returnform.php?book_title=".$rows['book_title']."&scholar_no=".$rows['scholar_no']."&cop=".$rows['no_copies']."&name=".$rows['name']."&course=".$rows['course']."&year=".$rows['year']."&section=".$rows['section']."&dob=".$rows['date_borrow']."&dor=".$rows['date_will_return']."'><center><img src='img/return.png'></center></a></td>";
				echo "</tr>";
			}
			echo "</table>";
				
		?>
    </div>
</div>

<div id="Footer"></div>
  </html>