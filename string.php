<?php
    # STRING EXPLODE FUNCTION - STRING TO ARRAY
    $str = "This is an example";

    $explodeArr = explode(" ", $str, 3);

    echo "<pre>";
      print_r($explodeArr);
    echo "</pre>";

    # STRING IMPLODE FUNCTION - ARRAY TO STRING
    $a = ["This", "is", "an", "example"];

    // $implodeArr = implode(" ", $a);
    $implodeArr = join(" ", $a);

    $str = "Tushar Nishi";

    # STR_SPLIT FUNCTION - Devided strings
    $split = str_split($str, 2); // array itself, how many letters

    echo "<pre>";
      print_r($split);
    echo "</pre>";

    # CHUNK_SPLIT FUNCTION
    $newStr = chunk_split($str, 2, '..');

    echo "<pre>";
      print_r($newStr);
    echo "</pre>";

    # STRING CASE => LOWER CASE, UPPERCASE

    $strLower = strtolower($str);
    $strUpper = strtoupper($str);
    $strCapital = ucfirst($str);
    $strWords = ucwords($str);

    echo "<pre>";
      print_r($strWords);
    echo "</pre>";

    # STRING LENGTH AND COUNT FUNCTIONS
    # STRLEN FUNCTION
    echo strlen($str) . "<br>";
    # STR_WORD_COUNT FUNCTION
    echo str_word_count($str) . "<br>";

    # STR_WORD_COUNT FUNCTION
    $newArray = str_word_count($str, 2);

    echo "<pre>";
      print_r($newArray);
    echo "</pre>";

    $substr = "Hello world! The world is so beautiful. Every world have own strength.";

    # SUBSTR_COUNT FUNCTION
    echo substr_count($substr, "world", 1, 30) . "<br>";

    # STRPOS FUNCTION - CASE SENSITIVE
    echo "STRPOS: " . strpos($substr, "world") . "<br>"; // RETURN FIRST STRING POSITION
    # STRRPOS FUNCTION - CASE SENSITVE
    echo "STRRPOS: " . strrpos($substr, "world") . "<br>"; // RETURN LAST STRING POSITION

    # STRIPOS FUNCTION - CASE INSENSITIVE
    echo "STRIPOS: " . stripos($substr, "world") . "<br>"; // RETURN FIRST STRING POSITION
    # STRRIPOS FUNCTION - CASE INSENSITIVE
    echo "STRRIPOS: " . strripos($substr, "world") . "<br>"; // RETURN LAST STRING POSITION

    # SEARCH STRING FUNCTIONS (RETURN STRING)
    # STRSTR Fuction Return Remaining Data After
    echo strstr($substr, "world") . "<br>";
    echo strstr($substr, "world", true) . "<br>";
    # CASE INSENSETIVE
    echo stristr($substr, "world", true) . "<br>";
    echo strchr($substr, "world") . "<br>";
    echo strchr($substr, "world", true) . "<br>";
    echo strrchr($substr, "world") . "<br>"; // REVERSE
    echo strpbrk($substr, "e") . "<br>"; // FIND CHARACTER SINGLE/MULTI

    # STRING => SUBSTRING FUNCTION
    echo substr($substr, 5) . "<br>"; // Substring Function Start from 6th letters
    echo substr($substr, 10, 20) . "<br>"; // Second P=> starting point Last P => Ending poing
    echo substr($substr, 10, -1) . "<br>"; // Negative P => Start from Last

    # STRING => REPLACE FUNCTION
    $str = "I love php, I love php too...";

    # STR_REPLACE Function => CASE SENSITIVE
    echo str_replace("php", "python", $str) . "<br>";

    $find = ["Hello", "world"];
    $rep = ["Hi", "Earth"];

    echo str_replace($find, $rep, $substr) . "<br>";
    # CASE INSENSITIVE
    echo str_ireplace($find, $rep, $substr) . "<br>";

    # SUBSTR_REPLACE Function =>
    echo substr_replace($str, "javascript", 7) . "<br>";

?>
