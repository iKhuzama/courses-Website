<?php

	$con = mysqli_connect("localhost","root","","itdepartment");
	if(!$con){
		die("Connection failed: " . mysqli_connect_error());
	}
?>