<?php
if(isset($_POST['submit']))
{
	include('../dbcon.php');
	$rollno=$_POST['rollno'];
	$name=$_POST['name'];
	$city=$_POST['city'];
	$pcon=$_POST['pcon'];
	$std=$_POST['std'];
	$id=$_POST['sid'];
	$imagename =$_FILES['simg']['name'];
$tempname = $_FILES['simg']['tmp_name'];
move_uploaded_file($tempname,"../dataimg/$imagename");

$qry="UPDATE `student` SET `rollno` = '$rollno', `name` = '$name',`city` = '$city' , `pcont` ='$pcon', `standard`= '$std' ,`image`='$imagename' WHERE `Id` = '$id';";


	$run= mysqli_query($con,$qry); 
  if($run == true)
  {	  
	?>
		<script>
		alert('Data updated Successful');
		window.open("updatestudent.php",'_SELF');
		</script>
		<?php
		;
	
	}

}
?>