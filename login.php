<!doctype html>
<html>
<head>
	<title>Login</title>
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
			box-shadow:2px 4px 8px #000;
			border-radius:8px;
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
			color:#fff;
			display:block;
		}
		.seperator
		{
			height:45px; line-height:45px; text-align:center; width:2px; font-size:20px; font-weight:900; color:#000;
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
			text-align:center; //box-shadow:2px 4px 8px #000;
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
	<section id="sidebar">LOGIN</section>
	<section id="loginbody">
    	<div id="usr"><a>User</a></div>
    	<div id="admin"><a>Admin</a></div>
        <div id="field">
        <form method="post">
        <table>
        	<tbody>
			<tr>
        	      <td>&nbsp;</td>
      	      </tr>
            <tr>
        	 <td > Username  <input name="username" type="text" required="required" class="styleTextField" id="contact" placeholder="kundan123"></td>
      	    </tr>
        	<tr>
        	   <td>&nbsp;</td>
      	    </tr>
         	<td ><label for="password">Password<br>
         	</label>
       	      <input name="password" type="password" required="required" class="styleTextField" id="password"> </td>       	
          	<tr>
        	   <td>&nbsp;</td>
      	    </tr>
				<tr>
        	      <td ><input name="login" type="submit" class="styleTextField" id="submit" value="Login" style="background:-webkit-linear-gradiant(#fff,#313131); background:linear-gradient(#fff,#313131); font-weight:500; color:#000"></td>
      	      </tr>
        	    <tr style="opacity:1; ">
        	      <td ><input name="reset" type="reset" class="styleTextField" id="reset" value="Reset" style="background:-webkit-linear-gradiant(#fff,#313131); background:linear-gradient(#fff,#313131); font-weight:500; color:#000"></td>
      	      </tr>             
      	    </tbody>
      	  </table>
          </form>
        </div>
    </section>
	<section id="footer"></section>
</body>
</html>
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
	//include('library/connection.php');
	$link= mysqli_connect("localhost","root","","library_system");
	$query="SELECT * FROM userv WHERE username = '$username' and password = '$password'";
	$login = mysqli_query($link,$query);
	if (mysqli_num_rows($login) == 1){
	$_SESSION['username']=$_POST['username'];
	header("Location: user_interface.php");
}
	else{
	echo "<script>alert('Note: Wrong Username and Password');</script>";
	}
}
?>