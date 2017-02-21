<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>MANIT LIBRARY</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="icon" href="img/icon2.png" type="image/x-icon" style="width:50px; height:50px">
<style type="text/css">
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
		//border-radius:6px;
		border:12px #000123 ridge;
	}
	div#dialogbox >
	{
		background:#322F2F;
		padding:6px;	
	}
	div#dialogbox > #dialogboxhead
	{
		background:#B33C3E;
		font-weight:bold;
		font-size:20px;
		width:auto;
		height:auto;
		padding:6px;
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
				document.getElementById('dialogboxhead').innerHTML="Contact Information";
				document.getElementById('dialogboxbody').innerHTML=dialog;
				document.getElementById('dialogboxfoot').innerHTML='<button onClick="Alert.ok()" style="width:60px; height:30px; border-radius:4px">Close</button>';				
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
	<div id="holder">
    	<div id="header">
        	<img src="img/mhrd-logo.jpg" style="margin-left:97px; border-radius:6px; margin-right:auto; margin-top:6px;">
        </div>
        <div id="menu">
        	<nav>
            <ul>
            <li><a href="official.php">Home</a></li>
            <li class="seperator">|</li>
         <li><a><button onClick="toggleNavPannel('tutorial')">Video Lectures<span id="navarrow">&#9662;</span></button></a></li>
			<li class="seperator">|</li>
            <li><a href="login_user.php">Login</a></li>
            </ul>
            </nav>
        </div>
        <div id="sideBar">
        <div id="sideBarMenu">
        	<ul>
            <li style="background:-webkit-linear-gradiant(#21603C,#148C40); background:linear-gradient(#21603C,#148C40);               	 border-top-left-radius:0px;
		border-top-right-radius:8px; border-bottom-left-radius:8px; border-bottom-right-radius:0px;  margin-bottom:5px;  opacity:1"><span style="color:#ddd; font-size:24px; font-weight:bold; line-height:50px;" class="textShadow">Menu</span></li>
            <li><a href="user_interface.php">Library</a></li>
            <li><a href="http://www.manit.ac.in">MANIT Website</a></li>
            <li><a href="http://odforum.netne.net/web/www/php/welcome.php">MANIT Discussion Forum</a></li>
            </ul>
        </div>
        <div id="registration" >
        	<p align="center" style="width:230px; margin-left:22px; height:60px; line-height:60px; text-align:center;  border-radius:0px 20px 0px 20px; ; background:-webkit-linear-gradiant(#7E84FF,blue); background:linear-gradient(#7E84FF,blue);"><a href="registration.php" style="display:block; text-align:center; color:#fff; text-decoration:none" class="styleText">REGISTRATION</a></p>
            <p style="margin:12px; padding:6px; color:#DCDCDC">New User Click here to Register</p>
        </div>
        </div>
     <div id="mainbody">
        	<?php include'jq.php'; ?>
            <p class="textShadow" style="text-align:center; padding:4px; color:#111; font:24px bold Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif ">
            	Welcome, To the Online Library Management System 
											MANIT Bhopal.
            </p>
       </div>
        <div id="Footer">
        	<p style="float:left; margin-left:82px; text-align:center; color:#fff; padding:2px">Copyright 2016-2019 @IHS</p>
            <P style="float:right; margin-right:82px; //margin:60px; padding:2px"> 
            	<a href="profile.php" class="link">About Developer</a>
                <a>|</a>
                <a class="link" href="#" onClick="Alert.render('Name:Mohd Aasif<br>Email:mohammad.aasif31@gmail.com<br>Mobile:9509965696')">Contact Developer</a>
            </P>
        </div>
        </div>
         <div id="dialogoverlay"></div>
	<div id="dialogbox">
    	<div id="dialogboxhead"></div>
        <div id="dialogboxbody"></div>
        <div id="dialogboxfoot"></div>
    </div>
    </div>
    </body>
</html>