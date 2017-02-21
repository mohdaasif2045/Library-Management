<html>
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
		<form class="form" method="POST" action="insertbook.php">
		<tr>
		<td>Book ID: </td>
		<td><input type="text" name="bookid"></td>
		</tr>
		<tr>
			<td>Book Title</td>
			<td><input type="text" name="bookname"></td>
		</tr>
		<tr>
			<td>Book Category</td>
			<td><input type="text" name="bookcat"></td>
		</tr>
		<tr>
			<td>No. of Copies</td>
			<td><input type="text" name="bookcop"></td>
		</tr>
		<tr>
			<td>Status</td>
			<td><input type="text" name="bookstat"></td>
		</tr>
		<tr>
				<td></td>
				<td><button name="borrowbook"><a class="-buttonform" ><span class="-home">Go</span></a></button></td>
		</tr>
		<tr><td>
		<td>
			<?php
			
    			 if (isset($_POST['bookname'])) { 
					include('library/connection.php');
					$id=$_POST['bookid'];
					$name=$_POST['bookname'];
					$cat=$_POST['bookcat'];
					$cop=$_POST['bookcop'];
					$stat=$_POST['bookstat'];
					$con = mysqli_connect("localhost","root","","library_system");
					$query ="insert into books values('$id','$name','$cat','$cop','$stat')";
					if(mysqli_query($con,$query)){
							echo "Book Added Successfuly | <a href='booklist.php'>Book List</a>";
					}
					else{
							echo "Duplicate Entry no books added";
					}
						
			}
		?>
		</td>
		</tr>
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

