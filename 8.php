<?php
	echo "Fibonacci series upto 12 numbers";
        echo "<br/>";
	$n=12;
	function Series($n) {
		if($n==0) {
			return 0;
		}
		else if($n==1) {
			return 1;
		}
		else {
			return(Series($n-1)+Series($n-2));	
		}
	}
for($i=0;$i<$n;$i++)
	{
		echo Series($i);
		echo "\n";
	}
?>
		