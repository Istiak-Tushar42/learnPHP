<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Session Global Variable</title>
  </head>
  <body>
    <?php
      if(!isset($_SESSION['favcolor'])) {
        echo "Session is not set yet!";
      } else {
        echo "Favorite color: " . $_SESSION['favcolor'];
      }
    ?>
  </body>
</html>
