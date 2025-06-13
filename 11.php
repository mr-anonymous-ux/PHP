<?php
class C
	{
		function __construct()
			{
				echo "object is created";
				echo "<br/>";
			}
		function active($activity)
			{
				echo "I'm $activity";
				echo "<br/>";
			}
		function __destruct()
			{
				echo "Object is destroyed";
				echo "<br/>";
			}
	}

$obj=new C();
$obj->active('running');
$obj->active('walking');
$obj->active('eating');
unset($obj);

?>
