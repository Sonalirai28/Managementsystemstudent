<?php

    session_start();
	
	if( isset($_SESSION['uid']))
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
include('../dbcon.php');
//$sid = $_GET['sid'];
//$sql="SELECT * FROM `student` WHERE `Id`='$sid'";
//$run=mysqli_query($con,$sql);
//$data=mysqli_fetch_assoc($run);

?>

<table align="center" style="margin-top:40px">
<form action="deletestudent.php" method="post" enctype="multipart/form-data">
<tr>
<th>Enter standard</th>
<td>
<input type="number" name="standard" placeholder= "Enter standard" required="required">
</td>
<th>Enter student name</th>
<td>
<input type="text" name="stuname" placeholder= "Enter student name" required="required">
 </td>
<td colspan="2"><input type="submit" name="submit" value="search"></td></tr>
</form></table>
<table align="center" width="80%" border="1" style="margin-top:10px;">
<tr style="background-color:lightgrey;">
<th>No</th>
<th>image</th>
<th>Name</th>
<th>Rollno</th>
<th>Edit</th>
</tr>
<?php
if(isset($_POST['submit']))
{
	include('../dbcon.php');
	
	$standard = $_POST['standard'];
	$name = $_POST['stuname'];
	
	$sql="SELECT * FROM student where standard='$standard' and name='$name'";
	$run=mysqli_query($con,$sql);
	

if(mysqli_num_rows($run)<1)
	{
		echo"<tr><td colspan='5'> No Records Found</td></tr>";
	}
	else{
		$count=0;
		while($row=mysqli_fetch_assoc($run))
		{
			$count++;
			?>
	<tr align="center">
<td><?php echo $row['Id'] ?></td>
<td><img src="../dataimg/<?php echo $row['image'];?>" style="max-width:100px;"/></td>
<td><?php echo $row['name'] ?></td>

<td><?php echo $row['rollno'] ?></td>
<td><a href="deleteform.php?sid=<?php echo $row['Id'];?>">Delete</a></td>
</tr>
</table>

			<?php
		}
	
	}
	
	} 
	
?>

