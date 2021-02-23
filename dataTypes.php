<?php
  $name = "Tushar";
  $numeric = 100;
  $floatNumber = 3.14159;
  # $blooenType = false;
  $blooenType = true;
  // $arrayType = ["HTML", "CSS", "JAVASCRIPT", "PHP"];
  $arrayType = array("HTML", "CSS", "JAVASCRIPT", "PHP");
// $objectType = new MyClass();
$nullType = null;

// - OUTPUT
  echo $name . "<br>";
  echo $numeric . "<br>";
  echo $floatNumber . "<br>";
  echo $blooenType . "<br>";
  // echo $objectType . "<br>";
  echo $arrayType[3] . "<br>";
  echo $nullType . "<br>";

  # SHOW VALUE -> LENGTH AND DATA TYPE
  var_dump($nullType);
?>
