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

    $color = ["red", "green", "blue", "yellow"];

    echo "<pre>";
      print_r(str_replace("red", "black", $color));
    echo "</pre>";

    # SUBSTR_REPLACE Function =>
    echo substr_replace($str, "javascript", 7) . "<br>";
    # STRTR FUNCTION
    echo strtr($str, "ov", "ik") . "<br>";

    $arr = ["Hello" => "Hi", "world" => "earth"];
    # STRTR FUNCTION
    echo strtr($substr, $arr) . "<br>";


    # STRING COMPARE FUNCTIONS
    echo strcmp("Hello world!", "Hello earth!") . "<br>";
    echo strncmp("Hello world!", "Hello earth! Hello", 6) . "<br>";
    echo strcasecmp("Hello world!", "Hello earth!") . "<br>";
    echo strncasecmp("Hello world!", "Hello earth!", 5) . "<br>";
    echo strnatcmp("Hello world!", "Hello earth!") . "<br>";
    echo strnatcasecmp("Hello world!", "Hello earth!") . "<br>";

    # SUBSTRING COMPARE FUNCTIONS
    echo substr_compare("Hello world!", "Hello earth!", 6) . "<br>";
    echo substr_compare("Hello world!", "Hello earth!", 0, 3) . "<br>"; // CHECK FIRST 3 CHARACTERS
    echo substr_compare("Hello world!", "d!", -2, 2) . "<br>";
    echo similar_text("Hello world!", "Hello Nishi") . "<br>";
    echo similar_text("Hello world!", "Hello Nishi", $per) . "<br>";

    echo "Percentage: " . $per . "<br>";

    # STRREV FUNCTION
    echo strrev("Tushar Nishi") . "<br>";

    # STR_SHUFFLE FUNCTION
    echo str_shuffle("Tushar Nishi") . "<br>";

    $str = "Tushar Nishi";

    # STR_PAD FUNCTION
    echo str_pad($str, 20, ".") . "<br>";
    echo str_pad($str, 20, ".", STR_PAD_LEFT) . "<br>";
    echo str_pad($str, 20, ".", STR_PAD_BOTH) . "<br>";

    # STR_REPEAT FUNCTION
    echo str_repeat($str, 3) . "<br>";

    # TRIM FUNCTION
    echo trim($str, "Ti") . "<br>";
    echo rtrim($str, "Ti") . "<br>";
    echo ltrim($str, "Ti") . "<br>";

    # CHOP FUNCTION
    echo chop($str, "Ti") . "<br>";

    $str = "Hello 'Tushar Nishi'";

    # ADDSLASHES FUNCTION
    $newStr = addslashes($str);

    echo "$newStr <br>";

    # STRIPSLASHES FUNCTION
    echo stripslashes($newStr) . "<br>";

    # ADDCSLASHES FUNCTION
    $newStr = addcslashes($str, "Nishi");
    $newStr = addcslashes($str, "A..Z");

    echo "$newStr <br>";

    # STRIPCSLASHES FUNCTION
    echo stripcslashes($newStr) . "<br>";

    $str = "A 'quote' is <b>bold</b>";
    $link = '<a href="https://youtube.com">Go to Youtube</a>';
    $nStr = 'I love "PHP"';

    # HTMLENTITIES FUNCTION
    $htmlent = htmlentities($str, ENT_QUOTES);
    echo "$htmlent <br>";

    # HTMLENTITIES DECODE FUNCTION
    $htmlentde = html_entity_decode($htmlent);
    echo "$htmlentde <br>";

    # HTMLSPECIALCHARS FUNCTION
    $htmlspch = htmlspecialchars($link, ENT_QUOTES);
    echo "$htmlspch <br>";

    # HTMLSPECIALCHARS DECODE FUNCTION
    $htmlspchd = htmlspecialchars_decode($htmlspch);
    echo "$htmlspchd <br>";

    echo "<pre>";
      print_r(get_html_translation_table(HTML_SPECIALCHARS));
    echo "</pre>";
    echo "<br>";

    echo "<pre>";
      print_r(get_html_translation_table(HTML_ENTITIES));
    echo "</pre>";
    echo "<br>";

    $str = "password";

    # MD5 FUNCTION
    echo "md5 Binary: " . md5($str, TRUE) . "<br>";
    echo "md5 HEX: " . md5($str) . "<br>";

    # SHA1 FUNCTION
    echo "sha1 Binary: " . sha1($str, TRUE) . "<br>";
    echo "sha1 HEX: " . sha1($str) . "<br>";


    if(md5($str) === "5f4dcc3b5aa765d61d8327deb882cf99") {
      echo "Password Matched BY MD5! <br>";
    }

    if(sha1($str) === "5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8") {
      echo "Password Matched BY SHA1! <br>";
    }

    $str = "uuencode use for encrypt messages";

    # CONVERT UUENCODE FUNCTION
    $encrypt = convert_uuencode($str);

    echo "Encrypt: $encrypt <br>" . "<br>";

    # CONVERT UUDECODE FUNCTION
    $decrypt = convert_uudecode($encrypt);

    echo "Decrypt: $decrypt <br>" . "<br>";

    $str = "Tushar Nishi";

    # BIN2HEX FUNCTION
    $toHex = bin2hex($str);

    echo "$toHex <br>";

    # HEX2BIN FUNCTION
    $toBin = hex2bin($toHex);

    echo "$toBin <br>";

    # CHR FUNCTION
    $str = chr(65); # <= ASCII VALUE TO CHARACTER

    echo "ASCII Value To Character: $str <br>";

    $str = chr(97); # <= Small Letter a ASCII VALUE TO CHARACTER

    echo "ASCII Value To Character: $str <br>";

    $str = chr(0101); # <= Octal Value

    echo "ASCII Value To Character: $str <br>";

    # ORD FUNCTION
    $str = ord("A"); # <= CHARACTER TO ASCII VALUE

    echo "Character To ASCII Value: $str <br>";

    $str = ord("a"); # <= CHARACTER TO ASCII VALUE

    echo "Character To ASCII Value: $str <br>";

    $str = "Hello <b>Tushar</b>, Hello <i>Nishi<i/>";

    # STRIP_TAGS FUNCTION
    echo strip_tags($str) . "<br>"; # <= REMOVE TAGS FROM STRING
    echo strip_tags($str, "<i>") . "<br>"; # ALLOW <= SPECIFIC TAG REMOVE OTHERS

    $str = "Hello there I am learning php";

    # WORDWRAP FUNCTION
    echo wordwrap($str, 4, "<br>") . "<br>"; # BREAK STRING BY WORDWRAP => NOWRAP (DEFAULT)
    echo wordwrap($str, 4, "<br>", TRUE) . "<br>"; # BREAK STRING BY WORDWRAP => WRAP

?>
