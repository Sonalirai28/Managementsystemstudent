<?php 

if(isset($_POST['login']))
{
$username = $_POST['uname'];
$password = $_POST['pass'];
echo $username;
echo $password;
$con = mysqli_connect('db4free.net','sonali_jss','sonali@123','sonali_123');
if($con == false)
{
echo "connection is not done";
}
else
{
	echo "connected";
}
$qry="SELECT * FROM admin WHERE username='$username' AND password='$password'";	
$run=mysqli_query($con,$qry);
$row = mysqli_num_rows($run);


if($row<1)
{
	?>
	<script>
	alert('username or password not match!!');
	window.open('login.php','_self');
	</script>  
	<?php
}
else{
	$data=mysqli_fetch_assoc($run);
	$id=$data['Id'];
	
	session_start();
	$_SESSION['uid']=$id;
	header('location:admin/admindash.php');
      }
}
?>