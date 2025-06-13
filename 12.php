<html>
	<body>
	<form method="GET" action=''>
	username:<input type="text" name="uname"/><br>
	password:<input type="password" name="pass"/><br>
	<input type="submit">
        </form>

<?php
	error_reporting(0);
		if($_GET['uname'] || $_GET['pass']) {
				echo "Welcome ".$_GET['uname']."<br/>";
				echo "Your password ".$_GET['pass'];
				exit;
		}
?>
</body>
</html>