<?php
  $n1=40;
  $n2=30;
  $n3=10;
  if($n1>$n2 && $n1>$n3)
    {
       echo "$n1 is largest";
     }
  else
    {
       if($n2>$n1 && $n2>$n3)
           {
 		echo "$n2 is largest";
 	     }
        else
		{
  			echo "$n3 is largest";
		}
	}
?>