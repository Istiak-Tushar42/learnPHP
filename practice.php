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

  // Loops

  $a = 1;

  while($a <= 10) {
    echo $a."<br>";
    $a++;
  }

  $a = 10;

  do {
    echo $a."<br>";
    $a--;
  } while($a >= 1);

  for($i = 1; $i <= 20; $i++) {
    if($i === 3) {
    // echo "Number 3 : $i<br>";
      // continue;
      // break;
      goto abc;
    }
      echo $i."<br>";
  }

  abc:
  echo "goto from here<br>";

  for($i = 1; $i <= 100; $i += 10) {
    for($j = $i; $j < $i + 10; $j++) {
      echo $j." ";
    }
    echo "<br>";
  }

  function myFunc() {
    echo "Hello I am a Function<br>";
  }

  myFunc();

  // Function with Parameter
  function withParam($p1, $p2) {
    return $p1 + $p2;
  }

  $sumFunc = withParam(5, 10);

  echo $sumFunc."<br>";

  function withPar($p1, $p2) {
    return $p1 + $p2;
  }

  $sumFunc = "withParam";

  echo $sumFunc(10, 20)."<br>";

  // Function with Reference Parameter
  function refParam(&$para) {
    $para = 'I am Ratul';
    echo "$para and I am good<br>";
  }
  $para = 'I am Tushar';
  refParam($para);

  $global = "I am Global Variable<br>";

  function local() {
    global $global;

    $local = 'I am Local variable<br>';
    global $local;
    echo $local;
    echo $global;
  }

  local();

  // print_r($GLOBALS);

  // Recursion
  function display($n) {
    if($n <= 5) {
      echo "$n <br>";
      display($n+1);
    }
  }

  display(1);

  function factorial($num) {
    if($num == 0) {
      return 1;
    } else {
      return ($num * factorial($num - 1));
    }
  }

  echo factorial(5);

  # ARRAYS

  # indexedArray
  $num = array(1, 2, 3, 4, 5);
  $num2 = [1, 2, 3, 4, 5, 6, 7];

  echo "<br>";
  echo $num2[5]."<br>";
  
  # AssociativeArray
   $associative = [
     'Tushar' => 1,
     'Nishi' => 2,
     'Ratul' => 3,
     'Binay' => 4,
   ];

   echo $associative["Tushar"]."<br>";
   echo $associative["Nishi"]."<br>";
   echo $associative["Ratul"]."<br>";
   echo $associative["Binay"]."<br>";

   # ForEach Loops
   forEach($associative as $key => $value) {
     echo "$key = $value <br>";
   };

   $asso = [
     10 => 'AUDI',
     2 => 'BMW',
     30 => 'FARRERY',
     400 => 'CHEVRON',
   ];

   forEach($asso as $key => $value) {
     echo "$key = $value <br>";
   };
?>
