<?php
  $num1 = 10;
  $num2 = 20;

  $sum = $num1 + $num2;

  $sub = $num2 - $num1;

  $mul = $num1 * $num2;

  $div = $num2 / $num1;

  $mood = $num2 % $num1;

  $exponentiation = $num1 ** $num1;

$num1++;
$num2--;

  echo $sum . "<br>";
  echo $sub . "<br>";
  echo $mul . "<br>";
  echo $div . "<br>";
  echo $mood . "<br>";
  echo $exponentiation . "<br>";
  echo $num1 . "<br>";
  echo $num2 . "<br>";

  #COMPARISON OPERATOR
  if($num1 < $num2) {
    echo "Number1 is Smaller...";
  }
?>
