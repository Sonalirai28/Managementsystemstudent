<?php

    session_start();
	
	if( $_SESSION['uid'])
	{
		
	}
	else
	{
		header('location:../login.php');
	}
	
	
?>
<?php
include('header.php');
include('titlehead.php');

?>
<form method="POST" action="addstudent.php" enctype="multipart/form-data">
<table align="center" style="width:50%;margin-top:30px;
color:black;
background-color:lightgrey;">

<tr>
<th style="padding:12px;">Roll no.</th>
<td><input type="text" name="rollno" placeholder="Enter Roll no."  required></td>
</tr>
<tr>
<th style="padding:12px;">Full Name</th>
<td><input type="text" name="name" placeholder="Enter name"  required></td>
</tr>
<tr>
<th style="padding:12px;">City</th>	
<td><input type="text" name="city" placeholder="Enter city"  required></td>
</tr>
<tr>
<th style="padding:12px;">Parents contact no.</th>
<td><input type="text" name="pcon" placeholder="Enter No."  required></td>
</tr>
<tr>
<th style="padding:12px;">Standard</th>
<td><input type="number" name="std" placeholder="Enter Standard"  required></td>
</tr>
<tr>
<th style="padding:12px;">Image</th>
<td><input type="file" name="simg"  required></td>
</tr>
<tr>
<td colspan="2"  align="center" style="padding:12px;"><input type="submit"name="submit" value="submit"></tr>
</table>
</form>
</body>
</html>
<?php
if (isset($_POST['submit']))
{
	include('../dbcon.php');
	$rollno=$_POST['rollno'];
	$name=$_POST['name'];
	$city=$_POST['city'];
	$pcon=$_POST['pcon'];
	$std=$_POST['std'];
	$imagename =$_FILES['simg']['name'];
$tempname = $_FILES['simg']['tmp_name'];
move_uploaded_file($tempname,"../dataimg/$imagename");

	$query="Select * from student where rollno='$rollno' and pcont='$pcon'";
	$check=mysqli_query($con,$query);
	$rowno=mysqli_num_rows($check);
	if($rowno>0)
	{
		?>
		<script>
		alert("record exist");
		</script>
		<?php
	}
	else{
	$qry="INSERT INTO student(rollno, name,city, pcont, standard,image) VALUES ('$rollno','$name','$city','$pcon','$std','$imagename')";


	$run= mysqli_query($con,$qry);  
	?>
		<script>
		alert('Data Inserted Successful');
		</script>
		<?php
	
	
	}
}?>