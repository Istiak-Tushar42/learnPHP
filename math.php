<?php
  # PHP Math Min & Max Functions => Takes minimum 2 parameter

  # MIN FUNCTION
  $min = min(22, 45, 33, 5, 78, 69, 98); # MIN USE FOR FIND MINUMUM VALUE
  # MAX FUNCTION
  $max = max(22, 45, 33, 5, 78, 69, 98); # MAX USE FOR FIND MAXIMUM VALUE

  # Print Minimum Value
  echo "Minimum value is: $min <br>";
  # Print Maximum Value
  echo "Maximum value is: $max <br>";

  # MIN & MAX USE WITH ARRAY
  $min = min(array(7, 13, 26, 45, 24, 18, 12)); # MIN USE FOR FIND MINUMUM VALUE
  # MAX FUNCTION
  $max = max(array(7, 13, 26, 45, 24, 18, 12)); # MAX USE FOR FIND MAXIMUM VALUE

  # Print Minimum Value
  echo "Minimum array value is: $min <br>";
  # Print Maximum Value
  echo "Maximum array value is: $max <br>";

  # FIND MINIMUM VALUE FOR MULTI ARRAY
  $min = min(array(2, 4, 6), array(2, 3, 7));

  echo "<pre>";
    echo "Minimum value of multi: ";
    print_r($min);
  echo "</pre>";
  echo "<br>";

  # FIND MAXIMUM VALUE FOR MULTI ARRAY
  $max = max(array(2, 4, 6), array(2, 3, 7));

  echo "<pre>";
    echo "Maximum value of multi: ";
    print_r($min);
  echo "</pre>";
  echo "<br>";

  # CHECK MIN & MAX BOOLEAN VALUE
  $val = min(TRUE, FALSE); # GIVE NOTHING
  $val = min(TRUE, 0);

  echo "Minimum boolean value is: $val <br>";

  $val = max(TRUE, FALSE);
  echo "Maximum boolean value is: $val <br>";

  # PHP Math Ceil Floor Round Abs Functions

  # CEIL FUNCTION
  echo("Ceil value: " . ceil(2.2) . "<br>"); // USE FOR ROUND UP
  # FLOOR FUNCTION
  echo("Floor value: " . floor(2.8) . "<br>"); // USE FOR ROUND DOWN
  # ROUND FUNCTION
  echo("Round up value: " . round(2.8) . "<br>"); // USE FOR ROUND UP AND DOWN BOTH
  echo("Round down value: " . round(2.2) . "<br>");
  # ABS FUNCTION
  echo("Absolute value: " . abs(-3) . "<br>"); // USE FOR PRINT ABSOLUTE VALUE

  # PHP Math Intdiv, Sqrt, Pow Functions

  # INTDIV FUNCTION
  echo "Intdiv value is: " . intdiv(8, 4) . "<br>"; // TAKE Dividend and Divisor Parameter
  echo "Intdiv value is: " . intdiv(-5, -2) . "<br>"; // TAKE Dividend and Divisor Parameter

  # SQRT FUNCTION
  echo "Squre root value is: " . sqrt(16) . "<br>"; // USE FOR SQURE ROOT

  # POW FUNCTION
  echo "Power value is: " . pow(3, 2) . "<br>"; // USE FOR POWER Take two parameter => Base, Exponent
  echo "Power value is: " . pow(-2, -4) . "<br>"; // USE FOR POWER Take two parameter => Base, Exponent

  # PHP Math Rand, Mt_rand & Lcg_value Functions <= USE FOR RANDOM VALUE

  # MATH RAND FUNCTION
  echo("Rand value is: " . rand() . "<br>"); // USE FOR RANDOM VALUE
  echo("Rand value between Zero to Ten: " . rand(0, 10) . "<br>"); // Take Minimum and Maximum Values

  # MT RAND FUNCTION
  echo("MT_Rand value is: " . mt_rand() . "<br>"); // USE FOR RANDOM VALUE
  echo("MT_Rand value between Zero to Ten: " . mt_rand(0, 10) . "<br>"); // Take Minimum and Maximum Values

  # LOG_VALUEFUNCTION
  echo("LCG_VALUE return decimal value: " . lcg_value() . "<br>"); // RETURN (0-1) DECIMAL VALUE Take no parameter


?>
