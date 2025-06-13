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
		if($rev==$n){
			echo "$n is palindrome";
		}
		else {
			echo "$n is not palindrome";
			}
?>