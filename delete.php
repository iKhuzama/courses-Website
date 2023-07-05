<?php 
include('db_connnection.php');
$id =$_REQUEST['id'];
$sql = "DELETE FROM course WHERE id = '$id'" ;

	if(!mysqli_query($con,$sql))
			die("Connection failed: " . mysqli_connect_error());
	else
			echo "Deleted successfully !"; 
				
			mysqli_close($con);

header("Location: courses.php");
?>