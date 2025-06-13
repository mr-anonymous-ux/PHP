<?php
	$str="My name is Arun";
	echo strtolower($str);echo "<br/>";
	echo strtoupper($str);echo "<br/>";
	echo ucwords($str);echo "<br/>";
	echo strrev($str);echo "<br/>";
	echo str_word_count($str);echo "<br/>";
	echo strpos($str,"Arun");echo "<br/>";
	echo str_replace("Arun","Kiran",$str);echo "<br/>";
?>