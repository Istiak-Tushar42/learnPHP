<?php
  echo "hello php" . "<br>";

  # CONST VARIABLE
  define("PI", 3.14159);

  echo PI . "<br>";

  # DATA TYPES
  $num = 10; // Numeric Datatype
  $floatType = 10.100; // Float Datatype
  $boolType = false; // Boolean Datatype
  $stringType = 'Tushar'; // String Datatype
  $arrayType = ['HTML', 'CSS', 'JAVASCRIPT', 'PHP']; // Array Datatype
  $arrayType2 = array('HTML', 'CSS', 'JAVASCRIPT', 'PHP'); // Array Datatype
  $nullType = null;

  // OUTPUT Datatype
  var_dump($nullType);
  echo "<br>";

  // Operators
  $num1 = 10;
  $num2 = 20;

  # ARITHMETIC OPERATORS
  $sum = $num1 + $num2;
  $sub = $num2 - $num1;
  $mul = $num1 * $num2;
  $div = $num1 / $num2;
  $mood = $num2 % $num1;
  $exponentiation = $num1 ** $num1;

  $sum += $num1;
  $sub -= $num1;
  $mul *= $num1;
  $div /= $num1;
  $mood %= $num1;
  $exponentiation **= $num1;

  echo $sum . "<br>";
  echo $sub . "<br>";
  echo $mul . "<br>";
  echo $div . "<br>";
  echo $mood . "<br>";
  echo $exponentiation . "<br>";

  # COMPARISON OPERATORS
  if($num1 < $num2) {
    echo "Smaller<br>";
  } else {
    echo "Greater<br>";
  }

  $marks = 30;

  if($marks >= 80 && $marks <= 100) {
    echo "A+<br>";
  } elseif($marks >= 70 && $marks < 80) {
    echo "A<br>";
  } elseif($marks >= 60 && $marks < 70) {
    echo "B<br>";
  } elseif($marks >= 50 && $marks < 60) {
    echo "C<br>";
  } elseif($marks >= 40 && $marks < 50) {
    echo "D<br>";
  } else {
    echo "Failed<br>";
  }

  // Switch Case
  $day = 5;

  switch($day) {
    case 1:
      echo "Saturday<br>";
    break;
    case 2:
      echo "Sunday<br>";
    break;
    case 3:
      echo "Monday<br>";
    break;
    case 4:
      echo "Tuesday<br>";
    break;
    case 5:
      echo "Wednesday<br>";
    break;
    case 6:
      echo "Thursday<br>";
    break;
    case 7:
      echo "Friday<br>";
    break;

    default:
      echo "Please Enter Valid Date...<br>";
  }

  // TERNARY OPERATORS
  $name = 'Tushar';

  echo $name === 'Tushar' ? 'Correct<br>' : 'Incorrect<br>';

  
?>
