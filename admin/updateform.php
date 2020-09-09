<?php

    session_start();
	
	if( isset($_SESSION['uid']))
	{
		echo"";
	}
	else
	{
		header('location:../login.php');
	}
	
	
?>
<?php
include('header.php');
include('titlehead.php');
include('../dbcon.php');
$sid = $_GET['sid'];
$sql="SELECT * FROM `student` WHERE `Id`='$sid'";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);
?>
<form method="POST" action="updatedata.php" enctype="multipart/form-data">
<table align="center" border="1" style="width:50%;margin-top:30px;">

<tr>
<th>Roll no.</th>
<td><input type="text" name="rollno" value=<?php echo $data['rollno']; ?> required></td>
</tr>
<tr>
<th>Full Name</th>
<td><input type="text" name="name"  value=<?php echo $data['name']; ?> required></td>
</tr>
<tr>
<th>City</th>	
<td><input type="text" name="city"  value=<?php echo $data['city']; ?> required></td>
</tr>
<tr>
<th>Parents contact no.</th>
<td><input type="text" name="pcon" value=<?php echo $data['pcont']; ?> required></td>
</tr>
<tr>
<th>Standard</th>
<td><input type="number" name="std"  value=<?php echo $data['standard']; ?>  required></td>
</tr>
<tr>
<th>Image</th>
<td><input type="file" name="simg"  required></td>
</tr>
<tr>
<td colspan="2"  align="center">
<input type="text" name="sid" style="display:none;" value="<?php echo $data['Id']?>" >
<input type = "submit" name="submit" value="submit">
</tr>
</table>
</form>
</body>