<?php
  ## WHILE LOOP START
  echo "<ol>";
    $a = 10;

    while($a >= 1) {
      echo "<li>"."Hello PHP</li>";
      $a--;
    }
  echo "</ol>";
  ## WHILE LOOP END

  ## DO/WHILE LOOP START
  echo "<ul>";
      $a = 1;

      do {
        echo "<li>"."Items ".$a."</li>";
        $a++;
      } while($a <= 10);
  echo "</ul>";
  ## DO/WHILE LOOP END

## FOR LOOP START
  for($i = 1; $i <= 10; $i++) {
    echo "<h1>"."Hello PHP</h1>";
  }
## FOR LOOP END

## NESTED FOR LOOP START
    for($i = 1; $i <= 100; $i += 10) {
      for($j = $i; $j < $i + 10; $j++) {
        echo $j . " ";
      }
      echo "<br>";
    }
## NESTED FOR LOOP END
?>
