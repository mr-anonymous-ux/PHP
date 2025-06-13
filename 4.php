<?php
  $a = 10;
  $b = 20;
  
  echo "Before swapping the values are: <br/>";
  echo "a = " . $a . "<br> b = " . $b . "<br><br>";

  // Swapping values

  $temp = $a;
  $a = $b;
  $b = $temp;

  echo "After swapping the values are: <br>";
  echo "a = " . $a . "<br> b = " . $b;
?>