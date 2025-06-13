<html>
	<body>
	<form method="POST" action=''>
	username:<input type="text" name="uname"/><br>
	password:<input type="password" name="pass"/><br>
	<input type="submit">
        </form>

<?php
	error_reporting(0);
		if($_POST['uname'] || $_POST['pass']) {
				echo "Welcome ".$_POST['uname']."<br/>";
				echo "Your password ".$_POST['pass'];
				exit;
		}
?>
</body>
</html>