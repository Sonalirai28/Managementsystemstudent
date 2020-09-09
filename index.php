<!DOCTYPE HTML>
<html lang="en_US">
<head>
<meta charset="UTF-8">
<title>Student Management System</title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">

</script></head>
<body style="margin:0;padding:0;background-color:#D5F5E3 
;">
<div style="height:120px;
background-color:#17a2b8;
margin:0;
padding:0;">
<h3 align="right" ><a href="login.php"style="margin-top:80%;color:black;font-family:cooper black;text-decoration:none;">Admin Login</a></h3>
	<div class="container"><h1 class="font" align="center">Welcome to Student Management System</h1>
<form method="post" action="index.php">
<table style="width:50%;padding:2%;" align="center">
   <tr>
   <td colspan="2" align="center" style="color:Blue;
	background-color:lightgrey;
	font-family:Harlow Solid Italic;
	font-size:30px;"> Student Information</td>
   </tr>
   <tr>
   
   <td align="center" style="margin-top:2%;">
   Choose Standard</td>
   <td>
   <select style="margin-left:12%;" name="std">
   <option value="1">1st</option>
    <option value="2">2nd</option>
	 <option value="3">3rd</option>
	  <option value="4">4th</option>
	   <option value="5">5th</option>
	    <option value="6">6th</option>
		  <option value="7">7th</option>
		    <option value="8">8th</option>
			  <option value="9">9th</option>
			    <option value="10">10th</option>
				  <option value="11">11th</option>
				    <option value="12">12th</option>
		</select></td>
   </tr>
   <tr><br><br>
   <td align="center" style="margin-top:1%;">
   Enter Roll no.</td>
   <td ><input type="text" name="rollno" style="margin-left:12%;" required></td>
   </tr>
   <tr>
   <td colspan="2"><input type="submit" name="submit"  onclick="hello()" value="show info" style="margin-left:40%;margin-top:3%;"></td>
   </tr>
   </table>
</body>
</html>


<?php
if(isset($_POST['submit']))
{

	$standard= $_POST['std'];
	$rollno= $_POST['rollno'];
	include('dbcon.php');
		include('function.php');
	showdetails($standard,$rollno);


	}
	

?>