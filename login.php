<?php
	session_start();
	
	if(isset($_SESSION['uid']))
	{
		header('location:admin/admindash.php');
	}
?>

<!DOCTYPE HTML>
<html lang="en_US">
<head>
<meta charset="UTF-8">

<title>Admin login</title>
<style>
.input{
	margin-top:4%;
	
}

</style>
</head>
<body style=" background-color:lightgrey;
margin:0;
padding:0;
">
<a href="index.php" style="text-decoration:none;font-size:25px;color:black;float:right;font-family:cooper black">Back</a>

<h1 align="center" class="header1"  style="font-family:Cooper Black;margin-top:5%"> Admin Login</h1>
<form action="connect.php" method="post">
<table align="center" style="height:300px;
width:350px;
margin-top:5%;
border-radius:6px;
display:flex;
padding:6%;
align-items:center;
background: rgba(0,0,0,0.2);
flex-direction:column;">
<tr>
<td>Username</td>
<td><input type ="text" name="uname" class="input" required><br></td>
</tr>
<tr >
<td>Password</td>
<td><input type="password" class="input" name="pass"  required></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="login" style="margin-top:15%;background:none;font-weight:900;color:blue;" value="login"></td>
</tr>
</table>
</form>
</body>
</html>
