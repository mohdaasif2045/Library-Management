<!doctype html>
<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>	
	html
	{
		background-color:#ddd;
	}
	body
	{
		width:70%;
		height:auto;
		margin-left:auto;
		margin-right:auto;	
		border-radius:8px;
		box-shadow:0 2px 4px 0 #000,0 2px 10px 0 #000 !important;
		background:url(img/bg-wall-repeat.jpg) no-repeat;
		margin-top:25px;
	}
	header
	{
		//background-color:#ffe;
		border-radius:8px 8px 0px 0px;
	}
	nav
	{
		//opacity:.8;
		width:100%;
		height:48px;
		text-align:center;
		line-height:48px;
		margin-top:-2px;
		background:linear-gradient(#CFCFCF,#000);
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
			width:50%;
			height:400px;
			background-color:#732A2B;
			float:left;
			color:#D8D8D8
		}
	#loginbody
	{
			width:50%;
			height:400px;
			float:right;
			//background-color:#ccc;
		}
	#usr
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
	width: 70%;
	margin-left: auto;
	margin-right: auto;
	height: 300px;
	background-color: #fff;
	clear: both;
	text-align: center;
	border-radius: 0 8px 8px 8px;
	box-shadow: 0 2px 4px 0 #000,0 2px 10px 0 #000 !important;
		}
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
	<header><img src="img/mhrd-logo.jpg" style="margin-left:78px;"></header>
	<nav>
		<ul>
			<li><a href="official.php">Home</a></li>
            <li class="seperator">|</li>
			<li><a href="registration.php">Registration</a></li>
		</ul>
	</nav>
	<section id="sidebar">LOGIN<br>
    	<?php
			$Today = date('y:m:d');
			$new = date('l, F d, Y', strtotime($Today));
			echo $new;	
		?>
        <?php  //include("library/calendar.php");?>
    </section>
	<section id="loginbody">
    	<div id="usr"><a href="login_user.php" class="link">User</a></div>
    	<div id="admin"><a href="login_admin.php" class="link" style="color:#000">Admin</a></div>
        <div id="field">
        <form method="POST"  id="formLogin">
         <p style="height:5px; text-align:center; line-height:5px"></p>
  	   <p style="height:5px; text-align:center; line-height:5px;">Username    </p>
       <input name="username" type="text" required class="styleTextField"  placeholder="Username"><br>
      <p style="height:5px; text-align:center; line-height:5px">Password     </p>
      <input name="password" type="password" required class="styleTextField" placeholder="Password" maxlength="40">
        <p style="height:5px; text-align:center; line-height:5px">
      <input type="submit" class="styleTextField" value="Login"  name="login">
       <p style="height:5px; text-align:center; line-height:5px">
        <p style="height:5px; text-align:center; line-height:5px">
      <input type="reset" class="styleTextField" value="Reset"  name="reset" >
	  <?php
	if (isset($_SESSION['username'])) {
	header('Location: user_interface.php');
	}
	else{
		
	}
	if(isset($_POST['login'])){		
	session_start();
	$username=$_POST['username'];
	$password=$_POST['password'];
	$link= mysqli_connect("localhost","root","","library_system");
	$query="SELECT * FROM userv WHERE username = '$username' and password = '$password'";
	$login = mysqli_query($link,$query);
	if (mysqli_num_rows($login) == 1){
	$_SESSION['username']=$_POST['username'];
	header("Location: user_interface.php");
}
	else{
	echo "<br><font color='red'>Note: Wrong Username and Password</font><br>";
	}
}
?>
</form>
        </div>
    </section>
	<section id="footer"></section>
</body>
</html>
