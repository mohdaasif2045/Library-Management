<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>MANIT LIBRARY</title>
<link href="css/borrowers.css" rel="stylesheet" type="text/css">
<link rel="icon" href="img/icon2.png" type="image/x-icon" style="width:50px; height:50px">
</head>

<body>
<div id="holder">
	<div id="head"><img src="img/mhrd-logo.jpg"></div>
  	<div id="menu">
  		<ul>
        	<li><a href="official.php">Home</a></li>
            <li><a href="book_usr.php">Book</a></li>
            <li><a href="login_user.php">Logout</a></li>
        </ul>
 	</div>
  <div id="containt">
    <div id="left">
    <table width="427" height="445" align="center" cellspacing="6" style="background-color:#DCDCDC; padding:1px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.56), 0 6px 20px 0 rgba(0, 0, 0, 0.65); border-radius:8px; opacity:.8; margin-left:360px">
	<form class="form" action="library/borrowedbookprocess.php" method="POST" name="t1">
	<tr>
    <td>Scholar Number  :</td>
    <td width="253" height="20" valign="middle">
	<input name="scholar_no" type="text" required class="styleText">
	</td>
    <tr>
	<td>Name:</td> 
	<td width="253">
	  <input name="name" type="text" required class="styleText">
	    </td>
	<tr>
	<td>Course :</td>
	<td><select name="course">
		<option>B.Tech</option>
		<option>M.Tech</option>
		<option>MBA</option>
		<option>MCA</option>
	</select>
	</td>
	<tr>
	<td>Year :</td>
	<td><select name="year">
		<option value="I">I</option>
		<option value="II">II</option>
		<option value="III">III</option>
		<option value="IV">IV</option>
	</select></td>
	<tr>
	<td>Branch :</td>
	<td><select name="section">
		<option value="cse">CSE</option>
		<option value="civl">CIVIL</option>
		<option value="mech">MECHANICAL</option>
		<option value="ee">ELECTRICAL</option>
        <option value="ece">ELECTRONICS</option>
        <option value="chem">CHEMICAL</option>
	</select></td>
	<tr>
	<td height="55">Date Borrowed :</td>
	<td><input name="date_borrow" type="date" required class="styleText" id="date" value="<?php echo date("h:i:sa"); ?>"></td>
	<tr>
	<td height="89">Date Will Return :</td>
	<td><input name="date_will_return" type="date" required="required"  class="styleText"></td>
	<tr>
	<td>Book Title :</td>
	<td><input name="book_title" type="text" class="styleText" value="<?php echo $_GET['name'];?>" readonly></td>
	<tr>
	<td>No. Copies :</td>
	<td><input name="no_copies" type="text" class="styleText" value='1' readonly></td>
	<tr>
		<td>
	<td><button name="borrowbook" style="width:140px; height:40px; border-radius:6px; background-color:#0956BD; color:white"><a class="-buttonform" >Go</a></button></td>
	</form>
	</table>
    </div>
    <div id="right">
        	    </div>
        <p>&nbsp;</p>
  </div>
</div>
</body>
</html>