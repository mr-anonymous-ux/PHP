<html>
<body>
	<form method="POST" action="" enctype="multipart/form-data"><br>
	<label for="file">Upload a file</label><br>
	<input type="file" name="upload"><br>
	<input type="submit" name="submit" value="submit"><br>
	</form>
</body>
</html>

<?php
	error_reporting(0);
	$target="uploads";
	$file=$target.basename($_FILES['upload']['name']);
	move_uploaded_file($_FILES['upload']['tmp_name'],$file);
	echo '<img src= "'.$file.'"width="500px" height="500px">';
?>

	