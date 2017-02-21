<html >
<head>

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
				<class="but">|<a href="listofborrowers.php">List of Borrowers</a>| <a href='addbook.php'>Add Books</a> | <a href='booklist.php'>Book List</a>
				<br /><br/><hr />
	 	<table cellspacing="6">
		<form class="form" method="POST">
		<tr>
		<td>Cathegory: </td>
		<td><select name="category" onchange="this.form.submit();">
				<?php 
					//include("library/connection.php");
					$link= mysqli_connect("localhost","root","","library_system");
					$dbq="select DISTINCT book_category from books ORDER BY book_category ASC";
					$query =mysqli_query($link,$dbq);
						echo "<option>select category</option>";
					while($rs=mysqli_fetch_array($query)){
						echo "<option>".$rs['book_category']."</option>";
					}
				?>
		</select></td>
		</table><br/>
		<?php

    		 if (isset($_POST['category'])) { 
			echo "<table border=1 id='tab' width='100%' cellpadding=0 cellspacing=0";
			$categ = $_POST['category'];
			$dbq1="select * from books where book_category like '%$categ%'";
			$locate =mysqli_query($link,$dbq1);
		
			echo "<tr>";
			echo "<th>bookid</th>";
			echo "<th>book title</th>";
			echo "<th>category</th>";
			echo "<th>no. copies</th>";
			echo "<th>status</th>";
			echo "<th>Borrow</th>";
			echo "<th>Reserve</th>";
			echo "</tr>";

			while($rows=mysqli_fetch_array($locate)){
				echo "<tr>";
				echo "<td>".$rows['book_id']."</td>";
				echo "<td>".$rows['book_title']."</td>";
				echo "<td>".$rows['book_category']."</td>";
				echo "<td>".$rows['no_copies']."</td>";
				echo "<td>".$rows['status']."</td>";
				echo "<td title=Borrow><a href='borrowedform.php?name=".$rows['book_title']."'><center><img src='img/brow.png'></center></a></td>";
				echo "<td title=Reserve><a href='reservedform.php?name=".$rows['book_title']."'><center><img src='img/reserved.png'></center></a></td>";
				echo "</tr>";
			}
			echo "</table>";
		}
				
	
		?>
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
<!--<script type="text/javascript">
function showUser(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getuser.php?q="+str,true);
xmlhttp.send();
}
</script>-->

