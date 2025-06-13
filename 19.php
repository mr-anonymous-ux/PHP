<?php
	$servername="localhost";
	$username="root";
	$password="";

	$con=mysqli_connect($servername,$username,$password);
	
	if(!$con) {
		die("Connection failed : ".mysqli_connect_error());
	}
	
	$sql="CREATE DATABASE BCAABCD";
	if(mysqli_query($con,$sql))  {
		echo "database created successfully";
	}
	else  {
		echo "error creating database : ".mysqli_error($con);
	}
	
	mysqli_close($con);
?>