<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="BCAABCD";

	$con=mysqli_connect($servername,$username,$password,$dbname);
	
	if(!$con) {
		die("Connection failed : ".mysqli_connect_error());
	}
	
	$sql="CREATE TABLE STUDENT(id INT(20)
                  PRIMARY KEY,firstname VARCHAR(30)
		  NOT NULL,lastname VARCHAR(30) 
		  NOT NULL,email VARCHAR(30)
		  )";

	if(mysqli_query($con,$sql))  {
		echo "Table Student created successfully";
	}
	else  {
		echo "error creating table : ".mysqli_error($con);
	}
	
	mysqli_close($con);
?>