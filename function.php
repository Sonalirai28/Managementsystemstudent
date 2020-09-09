<?php
function showdetails($standard,$rollno)
{
	
	include('dbcon.php');
	$sql="SELECT * FROM `student` WHERE `rollno`='$rollno' AND`standard`='$standard'";
	$run=mysqli_query($con,$sql);
	
	if(mysqli_num_rows($run)>0)
	{
		$data=mysqli_fetch_assoc($run);
		?>
		<table style="margin-top:2%;margin-left:25%;width:51%;height:90%;Background-color:#F2F4F4  
;">
		<tr>
		<th colspan="3" style="font-family:Algerian;font-size:30px;padding:10px;">STUDENT DETAILS</th>
		</tr>
		<tr>
		<th colspan="5"><img src= "dataimg/<?php echo $data['image'];?>"style="max-height:150px;max-width:120px;"/></th></tr>
		<tr style="margin-top:3%;"><th>Roll no.</th>
		<td><?php echo $data['rollno'];?></td>
		</tr>
		<tr>
		<th>Name</th>
		<td><?php echo $data['name'];?></td></tr>
				<tr>
		<th>Standard</th>
		<td><?php echo $data['standard'];?></td></tr>
				<tr>
		<th>Parents Contact No.</th>
		<td><?php echo $data['pcont'];?></td></tr>
				<tr>
		<th>City</th>
		<td><?php echo $data['city'];?></td></tr>
		</table>
	
		<?php
	}
	else
	{
		echo"<script>alert('no Student Found.');</script>";
	}
	
	
}
?>