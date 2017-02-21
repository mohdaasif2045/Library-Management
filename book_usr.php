<!doctype html>
<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>	
	html
	{
		background:url(img/body.jpg) no-repeat;
	}
	body
	{
		width:80%;
		height:auto;
		margin-left:auto;
		margin-right:auto;	
		border-radius:8px;
		box-shadow:0 2px 4px 0 #000,0 2px 10px 0 #000 !important;
		//background:url(img/bg-wall-repeat.jpg) no-repeat;
		margin-top:25px;
	}
	header
	{
		//background-color:#ffe;
		border-radius:8px 8px 0px 0px;
	}
	nav
	{
		opacity:.8;
		width:100%;
		height:48px;
		text-align:center;
		line-height:48px;
		margin-top:-2px;
		background:linear-gradient(#979797,#000);
	}
	nav ul
	{
		//background-color:#979797;
		margin:0px;
		padding:0px;
	}
	nav ul li
	{
		float:left;
		list-style:none;
		width:160px;		
	}
	nav ul li a
	{
		text-decoration:none;
		color:#00D80B;
		display:block;
	}
	.seperator
	{
		height:45px; 
		line-height:45px; 
		text-align:center; 
		width:2px; 
		font-size:20px; 
		font-weight:900; 
		color:#000;
	}
	#sidebar
	{
		width:24%;
		height:460px;
		background-color:#732A2B;
		float:left;
		color:#D8D8D8
	}
	#body
	{
		width:24%;
		height:460px;
		background-color:#D49FA0;
		float:right;
	}
	#loginbody
	{
		width:52%;
		height:460px;
		float:right;
		background-color:#fff;
		opacity:.8;
	}
	#loginbody p
	{
		margin-left:16px;
	}
	/*#usr
	{
			width:35%;
			height:60px;
			margin-left:15%;
			background-color:#fff;
			float:left;
			text-align:center;
			line-height:60px;
			margin-top:8px;
			border-radius:8px 8px 0 0;
		}
	#admin
	{
			width:35%;
			height:60px;
			margin-right:15%;
			float:right;
			text-align:center;
			line-height:60px;
			margin-top:8px;
		}
	#field
	{
			width:70%;
			margin-left:auto;
			margin-right:auto;
			height:300px;
			background-color:#fff;
			clear:both;
			text-align:center; 
			border-radius:0 8px 8px 8px;
			box-shadow:0 2px 4px 0 #000,0 2px 10px 0 #000 !important;
		}*/
	.styleTextField
	{
		width:250px;
		height:35px;
		font-size:16px ; font-family:"Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif ;
		border-radius:6px;
		margin:4px;
		text-align:center;
		border:thin solid #000;
	}
	#footer
	{
		width:100%;
		height:80px;
		clear:both;
		background-color:#4E4E4E;
		border-radius:0px 0px 8px 8px;
	}
	.link
	{
		text-decoration:none;
		display:block;
		color:#00D80B;
	}
</style>
</head>
<body>
	<header><img src="img/mhrd-logo.jpg" style="margin-left:139px;"></header>
	<nav>
		<ul>
			<li><a href="official.php">Home</a></li>
            <li class="seperator">|</li>
            <li><a href="book_usr.php">Books</a></li>
            <li class="seperator">|</li>
            <li><a href="logout_usr.php">Logout</a></li>
		</ul>
	</nav>
	<section id="sidebar">
        <ul>
             <li><a>Book List</a></li>
             <li><a>Popular Books</a></li>
             <li><a>Magazines</a></li>
        </ul>
    </section>
    <section id="body">
    	
    </section>
	<section id="loginbody">
    <table cellspacing="6">
		<form class="form" method="POST">
		<tr>
		<td>Category: </td>
		<td background="img/books.jpg"><select name="category" onchange="this.form.submit();">
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
        <td><input type="text"  onKeyUp="showUser(this.value)"></td>
		</table>
        <div id="txtHint"></div>
    <?php
    		if (isset($_POST['category'])) { 
			echo "<table border=1 id='tab' width='100%' cellpadding=0 cellspacing=0";
			$categ = $_POST['category'];
			$dbq1="select * from books where book_category like '%$categ%'";
			$locate =mysqli_query($link,$dbq1);
		
			echo "<text-align='center'><tr>";
			echo "<th>bookid</th>";
			echo "<th>book title</th>";
			echo "<th>category</th>";
			echo "<th>no. copies</th>";
			echo "<th>status</th>";
			echo "<th>Borrow</th>";
			echo "</tr>";

			while($rows=mysqli_fetch_array($locate)){
				echo "<tr>";
				echo "<td style='text-align:center'>".$rows['book_id']."</td>";
				echo "<td style='text-align:center'>".$rows['book_title']."</td>";
				echo "<td style='text-align:center'>".$rows['book_category']."</td>";
				echo "<td style='text-align:center'>".$rows['no_copies']."</td>";
				echo "<td style='text-align:center'>".$rows['status']."</td>";
				echo "<td title=Borrow><a href='borrow_form.php?name=".$rows['book_title']."'><center><img src='img/brow.png'></center></a></td>";
				echo "</tr>";
			}
			echo "</table>";
		}
		?>
    </section>
	<section id="footer"></section>
</body>
</html>
<script type="text/javascript">
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
</script>
