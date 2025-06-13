<?php
  $n=1222;
   echo "input number ".$n;
   echo "<br/>";
   $temp=$n;
   $rev=0;
   $sum=0;
   while(floor($temp)) {
	$rem=$temp%10;
	echo $rev=$rev*10+$rem;
	echo "<br/>";
	$temp=$temp/10;
	$sum=$sum+$rem;
	}
  echo "The reverse of $n is $rev";
  echo "<br/>";
  echo "The sum of the digits is $sum";
?>