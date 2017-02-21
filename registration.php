<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>MANIT LIBRARY</title>
<link rel="icon" href="img/icon2.png" type="image/x-icon" style="width:50px; height:50px">
<style>
div#dialogoverlay
	{
		display:none;	opacity:.8;	 position:fixed;	top:0px;	left:0px;  background:#ccc;  z-index:10;  width:100%;
	}
	div#dialogbox
	{
		display:none;
		position:fixed;
		background:#fff;
		width:550px;
		z-index:10;
		box-shadow: 3px 6px 8px #000;
		border-radius:8px;
		border:12px #000000 ridge;
	}
	div#dialogbox >
	{
		background:#322F2F;
		padding:6px;	
	}
	div#dialogbox > #dialogboxhead
	{
		background:-webkit-linear-gradiant(#666,#313131);
		background:linear-gradient(#666,#313131);
		font-weight:bold;
		font-size:20px;
		width:auto;
		height:auto;
		padding:6px;
		color:#fff;
	}
	div#dialogbox > #dialogboxbody
	{
		height:100px;
		padding:6px;
		background:#D1D1D1;
	}
	div#dialogbox >#dialogboxfoot
	{
		
		padding:6px;
		background:#A8A8A8;
		text-align:right;
	}
body
	{
		//background-color:#7A7A7A;
		//background-image:url(../img/bw.jpg);
		background-attachment:fixed;
	}
	#holder
	{
		width:950px;
		height:auto;
		margin:auto;
		background-image:url(img/bg-wall-repeat.jpg);
		-webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px 0 rgba(255, 255, 255, 0.15);
        -moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px 0 rgba(255, 255, 255, 0.15);
        box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px 0 rgba(255, 255, 255, 0.15);
		border-radius:8px 8px 0 0;
	}
	#header
	{
		height:auto;
		width:100%;
		margin-left:auto;
		margin-right:auto;
		margin-top:4px;
		border-radius:4px;
	}
	#menu
	{
		width:100%;
		height:48px;
		background:-webkit-linear-gradiant(#666,#313131);
		background:linear-gradient(#666,#313131);
		margin-top:-18px;
		margin-bottom:6px;
		margin-left:auto;
		margin-right:auto;
	}
	nav ul
	{
		margin-left:0px;
		padding:0px;		
	}
	nav ul li
	{
		width:160px;
		height:50px;
		line-height:50px;
		border-radius:4px;
		text-align:center;
		float:left;
		list-style-type:none;
	}
	nav ul li a
	{
		font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
		text-decoration:none;
		color:#ECECEC;
		display:block;
	}
	/*nav ul li a:hover
	{
		width:160px;
		background-color:#ffffff;
		color:#004BB0;
		border-radius:4px;
		text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.95);
	}*/
	#sideBar
	{
		width:521px;
		height:554px;
		//padding:4px;
		margin-left:4px;
		margin-right:auto;
		margin-top:12px;
		//background:url(img/registrationBackground.png) center no-repeat;
		//background-color:#6F6F6F;
		float:left;
		border-top-left-radius:8px; 
		border-bottom-left-radius:8px; 
	}
	#sideBar ul li
	{
	text-align: left;
	color: #000;
	font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
	padding: 2px;
	margin-left:8px;
	font-size: 18px;
	}	
	#body
	{
	width: 412px;
	height:auto;
	//opacity:.5;
	//background-color:#EBEBEB;
	/*-webkit-filter:blur(2px);
	-moz-filter:blur(2px);
	-o-filter:blur(2px);
	-ms-filter:blur(5px);
	filter:blur(1px);*/
	float: right;
	margin-left: auto;
	margin-right: 10px;
	margin-top: 12px;
	margin-bottom:-20px;
	//box-shadow: 0 2px 6px rgba(0, 0, 0, 0.65);
 // -webkit-filter: saturate(.6);
  //filter: saturate(.5);
	height: auto;
	border-left:thin solid #686868;
	
	}
	#form
	{
		margin-left:auto;
		margin-right:auto;	
		text-align:center; 
		width:100%;
		height:auto; 
		padding:2px;		
		border-top-right-radius:8px; 
		border-bottom-right-radius:8px;
		//background-color:#000;
		color:#000;
		font:16px Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
		//font-weight:bold;
	}
	section
	{
		//opacity:.8; //background-color:#E7E7E7; color:#000;
		width:100%; height:100%; margin-top:-20px; //border-radius:8px;
		border-top-left-radius:8px; 
		border-bottom-left-radius:8px; 
	}
	#Footer
	{
			width:100%;
			height:80px;
			clear:both;
			background-color:#4E4E4E;
			border-radius:0px 0px 8px 8px;
	}
	.img{

  -webkit-filter: grayscale(1);

  filter: grayscale(1);

	}
	.textShadow 
	{
   // font: bold 24px arial, sans-serif;
    //background-color: #565656;
    //color: transparent;
    text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.95);
	/*Chrome, Safari*/
    -webkit-background-clip: text;
	/*Firefox*/
    -moz-background-clip: text;
	/*Standard Syntax*/
    background-clip: text;
}/* CSS Document */
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
	td{
		text-align:center;
	}
	h2
	{
		text-align:center;
		color:#060606;
	}
	.styleText
	{
		font-size:16px ; font-family:"Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif ; font-weight:bold;
		text-align:left;
		margin-left:2px;
		padding:2px;
		color:red;
	}
	.opacity (@opacity: 0.5) {
	-webkit-opacity: 	@opacity;
	-moz-opacity: 		@opacity;
	opacity: 		@opacity;
}
	
	.seperator
	{
		height:45px; line-height:45px; text-align:center; width:2px; font-size:20px; font-weight:900; color:#000727;
	}
</style>
<script>
	function CustomAlert()
		{			
			this.render=function(dialog)
			{
				var winW=window.innerWidth;
				var winH=window.innerHeight;
				var dialogoverlay=document.getElementById("dialogoverlay");
				var dialogbox=document.getElementById("dialogbox");
				dialogoverlay.style.display= "block";
				dialogoverlay.style.height= winH+"px";
				dialogbox.style.display= "block";
				dialogbox.style.left=(winW/2) - (550 * .5)+"px";
				dialogbox.style.top= "120px";
				document.getElementById('dialogboxhead').innerHTML="Thank You";
				document.getElementById('dialogboxbody').innerHTML=dialog;
				document.getElementById('dialogboxfoot').innerHTML='<button onClick="Alert.ok()" style="border-radius:6px; width:100px; height:40px">Close</button>';				
			}
			this.ok=function()
			{
				document.getElementById("dialogoverlay").style.display="none";
				document.getElementById("dialogbox").style.display="none";
			}
		}
		
	var Alert=new CustomAlert();
</script>
</head>

<body>
<div id="dialogoverlay"></div>
	<div id="dialogbox">
    	<div id="dialogboxhead"></div>
        <div id="dialogboxbody"></div>
        <div id="dialogboxfoot"></div>
    </div>
	<div id="holder" >
    	<div id="header">
        	<img src="img/mhrd-logo.jpg" style="margin-left:72px; margin-top:4px">
        </div>
        <div id="menu">
        	<nav>
            <ul>
            <li><a href="official.php">Home</a></li>
            <li class="seperator">|</li>
            <li><a href="user_interface.php">Library</a></li>
			<li class="seperator">|</li>
            <li><a href="profile.php">About Developers</a></li>
            <li class="seperator">|</li>
            <li><a href="login_user.php">Login</a></li>
            </ul>
            </nav>
        </div>
      <div id="sideBar">
      <section>
        	<h2 class="textShadow">Registration Form</h2>
          <ul>
              <li>After Registering here you will be able to access the facility of Online Library System.</li><li>The Online Library System is now available for MANIT Students only.</li><li>In future  we will try to make it open for all.</li>
        </ul></section>
        </div>
        <div id="body" >
         <form method="post" id="form">
       	  <table width="250" border="0" align="center"  cellspacing="0" >
        	  <tbody>
        	    <tr>
        	      <td >Scholar Number        	        <input name="scholar" type="number" required="required" class="styleTextField" id="scholar" placeholder="14111205"></td>
      	      </tr>
        	    <tr>
        	      <td>&nbsp;</td>
      	      </tr>
        	    <tr>
        	      <td >Name        	        <input name="name" type="text" class="styleTextField" id="name"></td>
      	      </tr>
        	    <tr>
        	      <td>&nbsp;</td>
      	      </tr>
        	    <tr>
        	      <td >Gender:
                    <input name="gender" type="radio" id="radio" value="Male" checked="checked">
Male
<input type="radio" name="gender" id="radio2" value="Female">
Female</td>
      	      </tr>
        	    <tr>
        	      <td>&nbsp;</td>
      	      </tr>
        	    <tr>
        	      <td >Email-Id        	        <input name="email" type="email" required="required" class="styleTextField" id="email"></td>
      	      </tr>
        	    <tr>
        	      <td>&nbsp;</td>
      	      </tr>
        	    <tr>
        	      <td > Username        	        <input name="contact" type="text" class="styleTextField" id="contact" placeholder="mohdaasif123"></td>
      	      </tr>
        	    <tr>
        	      <td>&nbsp;</td>
      	      </tr>
        	    <tr>
        	      <td >Password        	        <input name="password" type="password" class="styleTextField" id="password"></td>
      	      </tr>
         	    <tr style="opacity:1; ">
        	      <td ><input name="submit" type="submit" class="styleTextField" id="submit" value="Submit" style="background:-webkit-linear-gradiant(#fff,#313131); background:linear-gradient(#fff,#313131); font-weight:500; color:#000"></td>
      	      </tr>
        	    <tr style="opacity:1; ">
        	      <td ><input name="reset" type="reset" class="styleTextField" id="reset" value="Reset" style="background:-webkit-linear-gradiant(#fff,#313131); background:linear-gradient(#fff,#313131); font-weight:500; color:#000"></td>
      	      </tr>             
      	    </tbody>
      	  </table>
           </form>
        </div>        
        <div id="Footer"></div>
    </div>
    
</body>
</html>
 <?php 
		if(isset($_POST['submit']))
		{
			$name=$_POST["name"];
			$gender=$_POST["gender"];
			$email=$_POST["email"];
			$username=$_POST["contact"];
			$pass=$_POST["password"];
			$roll=$_POST["scholar"];
			$c=mysqli_connect("localhost","root","","library_system");
			$q="INSERT INTO userv (scholar, name, gender, email, username, password)
			VALUES ('$roll','$name','$gender','$email','$username', '$pass')"; 
			mysqli_query($c,$q);
			if($q)
				 echo '<script>
				Alert.render("You have been registered successfully.");
			 </script>';
			else
				echo mysqli_error();
			
		}
	?>