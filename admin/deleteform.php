<?php

	include('../dbcon.php');
	$id=$_REQUEST['sid'];
$qry="DELETE FROM `student` WHERE `Id`='$id';";


	$run= mysqli_query($con,$qry); 
  if($run == true)
  {	  
	?>
		<script>
		alert('Data Deleted Successful');
		window.open("deletestudent.php",'_SELF');
		</script>
		<?php
		;
	
	}


?>