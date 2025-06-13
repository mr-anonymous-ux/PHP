<html>
<body>
<table width="200px" border="1">
<tr>
	<td>id</td>
	<td>Firstname</td>
        <td>Lastname</td>
	<td>Email</td>
</tr>

<?php
	$con=mysqli_connect('localhost','root','','BCAABCD');
	$sql="SELECT * FROM student";
	$res=mysqli_query($con,$sql);

	while($row=mysqli_fetch_array($res)) {
		?>

	<tr>
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['firstname']; ?></td>
		<td><?php echo $row['lastname']; ?></td>
		<td><?php echo $row['email']; ?></td>
	</tr>

<?php  }  ?>

</table>
</body>
</html>