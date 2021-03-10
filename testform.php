<?php

  echo "<pre>";
    # PHP $_GET SUPER VARIABLE
    // print_r($_GET);

    # PHP $_POST SUPER VARIABLE
    // print_r($_POST);

    # PHP $_REQUEST SUPER VARIABLE
    // print_r($_REQUEST);

    # PHP $_SERVER SUPER VARIABLE
    print_r($_SERVER);
  echo "</pre>";

  // echo $_GET['name'] . "<br>";
  // echo $_POST['name'] . "<br>";
    // echo $_REQUEST['name'] . "<br>";
    // echo $_REQUEST['age'] . "<br>";
    echo $_SERVER['PHP_SELF'] . "<br>";
    echo $_SERVER['HTTP_HOST'] . "<br>";



?>
