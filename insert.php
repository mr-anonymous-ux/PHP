<?php
	$t1=$_POST['t1'];
	$t2=$_POST['t2'];
	$t3=$_POST['t3'];
	$t4=$_POST['t4'];

$con=mysqli_connect('localhost','root','','BCAABCD');

$sql = "INSERT INTO student (id,firstname, lastname, email) VALUES ('$t1','$t2', '$t3', '$t4')";
mysqli_query($con,$sql);

?>

<script>
	alert('Inserted successfully');
	document.location="stud_view.php";
</script>

