<?php
  $cookie_name = "user";
  $cookie_value = "Tushar Nishi";

  # PHP SETCOOKIE FUNCTION
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Cookie Global Variable</title>
  </head>
  <body>
    <?php
      if(!isset($_COOKIE[$cookie_name])) {
        echo "COOKIE IS NOT SET!";
      } else {
        echo $_COOKIE[$cookie_name];
      }
    ?>
  </body>
</html>
