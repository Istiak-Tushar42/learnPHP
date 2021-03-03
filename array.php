<?php
    $multi = [
      [1, 'Istiak Hossain Tushar', 'Front-End Developer', 10000],
      [2, 'Ratul Al Mamun', 'Back-End Developer', 20000],
      [3, 'Mahadi Hasan', 'Graphics Designer', 10000],
      [4, 'Binay Krishna', 'Full Stack Developer', 30000],
      [5, 'Sanvir Hasan Rasel', 'Manager', 40000]
    ];

    // for($row = 0; $row < 5; $row++) {
    //   for($col = 0; $col < 4; $col++) {
    //     echo $multi[$row][$col] . " ";
    //   }
    //   echo "<br>";
    // }

    echo "<table border='1px' cellpadding='5px' cellspacing='0'>";
    echo "<tr>";
    echo      "<th>ID</th>";
    echo      "<th>Name</th>";
    echo      "<th>Designation</th>";
    echo      "<th>Salary</th>";
    echo  "</tr>";
    foreach($multi as $val1) {
      echo "<tr>";
        foreach($val1 as $val2) {
          echo "<td> $val2 </td>";
        }
      echo "</tr>";
    }
    echo "</table>";

    # Multidimensional AssociativeArray
    $marks = [
      'Krishna' => [
        'physics' => 85,
        'chemistry' => 80,
        'math' => 90
      ],
      'Binay' => [
        'physics' => 80,
        'chemistry' => 90,
        'math' => 85,
      ],
      'Mahadi' => [
        'physics' => 70,
        'chemistry' => 80,
        'math' => 85,
      ]
    ];

    echo "<table border='2px' cellpadding='5px' cellspacing='0'>";
    echo "<tr>
      <th> Student Name </th>
      <th> Physics </th>
      <th> Chemistry </th>
      <th> Math </th>
    </tr>";
    foreach($marks as $key => $val) {
      echo "<tr>
        <td> $key </td>";
        foreach($val as $val2) {
          echo "<td> $val2 </td>";
        }
      echo "</tr>";
    }
    echo "</table>";

    // echo "<pre>";
      // print_r($marks);
    // echo "</pre>";

    // Array as List
    $arrayList = [
      [1, 2],
      [3, 4]
    ];

    foreach($arrayList as list($item1, $item2)) {
      echo $item1 . $item2;
    }

    $listArray = [
      [1, 'Robert', 'Manager', 40000],
      [2, 'Brown', 'Salesman', 20000],
      [3, 'Brad', 'Computer Operator', 12000],
      [4, 'Traversy', 'Driver', 10000],
    ];

    echo "<table border='1px' cellpadding='5px' cellspacing='0'>";
    echo "<tr>
            <th>Id</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Salary</th>
          </tr>";
    foreach($listArray as list($id, $name, $designation, $salary)) {
      echo "<tr>
              <td>$id</td>
              <td>$name</td>
              <td>$designation</td>
              <td>$salary</td>
            </tr>";
    }
    echo "</table>";

    $empList = [
      [
        "id" => 1,
        "name" => "John Slayer",
        "designation" => "CEO",
        "salary" => 50000
      ],
      [
        "id" => 2,
        "name" => "Tom Vincie",
        "designation" => "Manager",
        "salary" => 40000
      ],
      [
        "id" => 3,
        "name" => "Sarah",
        "designation" => "Salesman",
        "salary" => 30000
      ],
      [
        "id" => 4,
        "name" => "Stepheni",
        "designation" => "Driver",
        "salary" => 20000
      ],
      [
        "id" => 5,
        "name" => "Ciger",
        "designation" => "Cheff",
        "salary" => 10000
      ],
    ];

    echo "<table border='1px' cellpadding='5px' cellspacing='0'>";
    echo "<tr>
            <th>Id</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Salary</th>
          </tr>";
    foreach($empList as list("id" => $id, "name" => $name, "designation" => $designation, "salary" => $salary)) {
      echo "<tr>
              <td>$id</td>
              <td>$name</td>
              <td>$designation</td>
              <td>$salary</td>
            </tr>";
    }
    echo "</table>";

    $food = ["Apple", "Orange", "Pineapple", "Grapes", "Banana"];

    # Length of Array
    // echo sizeof($food);
    // echo count($food);

    # IN_ARRAY Function
    // echo in_array("Apple", $food);
    if(in_array("Apple", $food)) {
      echo "FInd Successfully :)<br>";
    } else {
      echo "Can't Find!<br>";
    }

    # IN_SEARCH ARRAY FUNCTION
    echo array_search('Banana', $food);

    $foods = [
      "fruits" => ["Pineapple", "Grapes", "Banana"],
      "vegitables" => ["Tomato", "Lime", "Chillie"]
    ];

    // echo count($foods["fruits"]);

    $a = array(
      array('p', 'h'),
      array('p', 'r'),
      'o'
    );

    # IN_ARRAY Function
    if(in_array(array('p', 'h'), $a)) {
      echo "FInd Successfully :)<br>";
    } else {
      echo "Can't Find!<br>";
    }

    $foo = array('a' => 'Apple', 'b' => 'Banana', 'c' => 'Orange');

    # ARRAY_SEARCH Function
    echo array_search('Banana', $foo);

    $fru = ["Apple", "Orange", "Pineapple", "Grapes", "Banana"];
    $veg = ["a" => "Tomato", "b" => "Lime", "c" => "Chillie", "d" => "Carrot", "e" => "Cabbage"];
    $colors = ["Red", "Green", "Blue", "Aqua", "Purple"];

    # ARRAY_REPLACE Function
    $newArray = array_replace($fru, $veg);
    // $newArray = array_replace($fru, $veg, $colors);

    echo "<pre>";
      print_r($newArray);
    echo "</pre>";

    $arr1 = array("a" => array("red"), "b" => array("green", "yellow"));
    $arr2 = array("a" => array("black"), "b" => array("purple"));

    # ARRAY_REPLACE_RECURSIVE Function
    $arrayReplace = array_replace_recursive($arr1, $arr2);

    echo "<pre>";
      print_r($arrayReplace);
    echo "</pre>";

    $array1 = ["Tushar", "Nishi", "Ratul", "Binay", "Mahadi"];

    # ARRAY_PUSH Function
    array_pop($array1);
    # ARRAY_POP Function
    array_push($array1, "Rasel");

    # ARRAY_SHIFT Function
    array_shift($array1);
    # ARRAY_UNSHIFT Function
    array_unshift($array1, "Istiak", "Hossain", "Tushar");

    echo "<pre>";
      print_r($array1);
    echo "</pre>";
    echo "<br>";

    $var1 = ["a" => "Apple", "b" => "Orange", "c" => "Lemon", "d" => "Banana", "e" => "Grapes"];
    $var2 = ["b" => ["colors" => ["Red", "Green", "Blue"]], "g" => "Chillie", "h" =>"Cabbage", "i" => "Pea"];

    # ARRAY_MERGE Function
    // $mergeArray = array_merge($var1, $var2);
    # ARRAY_MERGE_RECURSIVE Function
    $mergeArray = array_merge_recursive($var1, $var2);
    // $mergeArray = $var1 + $var2;

    echo "<pre>";
      print_r($mergeArray);
    echo "</pre>";
    echo "<br>";

    $names = ["Istiak", "Tushar", "Nishi", "Ramnabaiyat"];
    $ages = ["27", "28", "18", "19"];

    # ARRAY_COMBINE Function
    $combinedArray = array_combine($names, $ages);

    echo "<pre>";
      print_r($combinedArray);
    echo "</pre>";
    echo "<br>";

    $color = ["Red", "Green","Blue", "Yellow", "Brown", "Aqua", "Lime"];

    # ARRAY_SLICE Function
    $arraySlice = array_slice($color, 3, 5, true);

    $x = ["Istiak", "Tushar", "Nishi", "Ramnabaiyat"];
    $y = ["Binay", "Krishna"];

    # ARRAY_SPLICE Function
    $arraySplice = array_splice($x, 1, 2, $y);

    $col = [
      "first" => "Red",
      "second" => "Green",
      "third" => "Blue",
      "fourth" => "Yellow",
      "fifth" => "Orange"
    ];

    # ARRAY KEY Functions
    // $arrKey = array_keys($col);
    // $arrKey = array_key_first($col);
    // $arrKey = array_key_last($col);
    // $arrKey = array_key_exists("third", $col);
    $arrKey = key_exists("six", $col);

    echo "<pre>";
      print_r($arrKey);
    echo "</pre>";
    echo "<br>";

    if($arrKey) {
      echo "Key Exists!<br>";
    } else {
      echo "Key Doesn't Exists!<br>";
    }

    # Array Intersect Functions
    $a1 = array("a" => "Red", "b" => "Black", "c" => "Blue", "d" => "Yellow");
    $a2 = array("a" => "Red", "b" => "Black", "f" => "Tomato");
    $a3 = array("a" => "Red", "b" => "Blue", "g" => "Gray");

    # ARRAY_INTERSECT Function => INTERSECT WITH VALUES
    $arrayIntersect = array_intersect($a1, $a2, $a3);

    # ARRAY_INTERSECT_KEY Function => INTERSECT WITH KEY
    $arrayIntersect = array_intersect_key($a1, $a2, $a3);

    # ARRAY_INTERSECT_ASSOC Function => INTERSECT WITH KEYS AND VALUES(BOTH)
    $arrayIntersect = array_intersect_assoc($a1, $a2, $a3);

    function compare($a, $b) {
      if($a === $b) {
        return 0;
      }
      return ($a > $b) ? 1 : -1;
    }

    function compVal($a, $b) {
      if($a === $b) {
        return 0;
      }
      return ($a > $b) ? 1 : -1;
    }

    # ARRAY_INTERSECT_UASSOC Function => User Defined Function
    $arrayIntersect = array_intersect_uassoc($a2, $a3, "compare");

    # ARRAY_UINTERSECT_ASSOC Function => User Defined Function
    $arrayIntersect = array_uintersect_assoc($a2, $a3, "compare");

    # ARRAY_INTERSECT_UKEY Function => User Defined Function
    $arrayIntersect = array_intersect_ukey($a1, $a2, $a3, "compare");

    # ARRAY_UINTERSECT Function => User Defined Function
    $arrayIntersect = array_uintersect($a1, $a2, $a3, "compare");

    # ARRAY_UINTERSECT_UASSOC Function => User Defined Function
    $arrayIntersect = array_uintersect_uassoc($a1, $a2, "compare", "compVal");

    #ARRAY_DIFF Function
    $arrayDiff = array_diff($a1, $a2);

    #ARRAY_DIFF_KEY Function
    $arrayDiff = array_diff_key($a1, $a2);

    #ARRAY_DIFF_ASSOC Function
    $arrayDiff = array_diff_assoc($a1, $a2, $a3);

    #ARRAY_DIFF_UASSOC Function
    $arrayDiff = array_diff_uassoc($a1, $a2, "compare");

    #ARRAY_UDIFF_ASSOC Function
    $arrayDiff = array_udiff_assoc($a1, $a2, "compare");

    #ARRAY_DIFF_UKEY Function
    $arrayDiff = array_diff_ukey($a1, $a2, "compare");

    #ARRAY_UDIFF Function
    $arrayDiff = array_udiff($a1, $a2, "compare");

    #ARRAY_UDIFF_UASSOC Function
    $arrayDiff = array_udiff_uassoc($a1, $a2, "compare", "compVal");

    $persons = array(
      array(
        "id"=> 1,
        "firstName" => "Istiak",
        "lastName" => "Tushar",
        "age"=> 28
      ),
      array(
        "id"=> 2,
        "firstName" => "Ramnabaiyat",
        "lastName" => "Nishi",
        "age"=> 18
      ),
      array(
        "id"=> 3,
        "firstName" => "Abdullah",
        "lastName" => "Al Mamun",
        "age"=> 29
      ),
      array(
        "id"=> 4,
        "firstName" => "Mahadi",
        "lastName" => "Hasan",
        "age"=> 25
      ),
    );

    $clor = array("a" => "Red", "b"=> "Green", "c" => "Blue", "d" => "Red");

    # ARRAY_VALUES Function
    $arrVals = array_values($clor);

    # ARRAY_UNIQUE Function
    $arrUnique = array_unique($clor);

    # ARRAY_COLUMN Function
    // $arrayColumn = array_column($persons, "firstName");
    $arrayColumn = array_column($persons, "firstName", "id");

    $cars = ["BMW", "CHEVY", "FERRARY", "MARUTI", "TOYOTA", "VOLVO", "MARCEDES", "HONDA", "OPEL"];
    $cars2 = ["a" => "BMW", "b" => "CHEVY", "c" => "FERRARY", "d" => "MARUTI", "e" => "TOYOTA", "f" => "VOLVO", "g" => "MARCEDES", "h" => "HONDA", "i" => "OPEL"];

    # ARRAY_CHUNK Function
    // $arrayChunk = array_chunk($cars, 2);
    $arrayChunk = array_chunk($cars2, 2, true);

    $rollNo = array("Istiak" => 1, "Tushar" => 2, "Nishi" => 3, "Ratul" => 4, "Binay" => 5);

    # ARRAY_FLIP Function
    $arrayFlip = array_flip($rollNo);

    # ARRAY_CHANGE_KEY_CASE Function - BY DEFAULT LOWERCASE
    $chgngeKeyCase = array_change_key_case($rollNo, CASE_UPPER);

    $sumVar = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
    $arrProd = [1, 2, 3, 4, 5];

    # ARRAY_SUM Function
    $arraySum = array_sum($sumVar);

    # ARRAY_PRODUCT Function
    $arrayProduct = array_product($arrProd);

    $colVal = ["Red", "Green", "Blue", "Orange", "Yellow", "Purple", "Pink", "Aqua"];

    # ARRAY_RAND(RANDOM) Function
    $arrayRand = array_rand($colVal, 2);

    # SHUFFLE Function
    shuffle($colVal);

    $arrFill = ["a", "b", "c", "d", "e"];

    # ARRAY_FILL_KEYS Function - Convert to AssociativeArray
    $arrFillKeys = array_fill_keys($arrFill, "Testing");

    # ARRAY_FILL Function
    $arrayFill = array_fill(0, 6, "Test");

    $arrwlk = array(
      "Tushar" => 10,
      "Nishi" => 20,
      "Mahadi" => 30
    );

    # ARRAY_WALK Function
    array_walk($arrwlk, "myFunc", "is a key of");

    function myFunc($value, $key, $param) {
      echo "$key $param $value <br>";
    }

    $mdaa = array(
      "Tushar" => array(
        "id" => 1,
        "age" => 28,
        "phone" => "+8801615922742",
        "mail" => "istiak.tushar.it@gmail.com"
      ),
      "Nishi" => 20,
      "Toshlu" => 30
    );

    # ARRAY_WALK_RECURSIVE Function
    array_walk_recursive($mdaa, "myFunc", "is a key of");

    $num = [1, 2, 3, 4, 5];
    $ffod = ["Apple", "Orange", "Pineapple", "Lemon", "Guava"];

    # ARRAY_MAP Function
    // $arrayMap = array_map("square", $num, $ffod);
    $arrayMap = array_map(null, $num, $ffod);

    function square($n, $m) {
      // return "$n = $m";
      return [$n => $m];
    }

    $red = array('Orange', 'Banana', 'Pineapple');

    # ARRAY_REDUCE Function
    $arrayReduce = array_reduce($red, "funcReduce");

    function funcReduce($n, $m) {
      return $n . "-" . $m;
    }

    $arrSort = ["Istiak", "Hossain", "Tushar", "Ramnabaiyat", "Jahan", "Nishi"];
    $aSort = array(
      "a" => "Apple",
      "e" => "Banana",
      "c" => "Orange",
      "d" => "Lemon",
      "b" => "Pineapple"
    );

    # ARRAY_SORTING Function

    # SORT
    // sort($aSort);

    # REVERSE SORT
    // rsort($aSort);

    # ASSOCIATIVE ORDER SORT
    // asort($aSort);

    # ASSOCIATIVE REVERSE ORDER SORT
    // arsort($aSort);

    # ASSOCIATIVE KEY ORDER SORT
    // ksort($aSort);

    # ASSOCIATIVE KEY REVERSE ORDER SORT
    krsort($aSort);

    $nSort = array("img7.png", "img4.png", "img6.png", "img2.png", "img5.png", "img1.png", "img3.png");

    # NATURAL ORDER SORT
    natsort($nSort);
    natcasesort($nSort);

    $f = ["Apple", "Banana"];
    $v = ["Lemon", "Cabbage"];

    # MULTI ARRAY SORTING BUT VALUE MUST HAVE SAME LENGTH INSIDE EVERY ARRAY
    array_multisort($f, $v);

    $rSort = [1, 2, 3, 4, 5];

    # REVERSE SORT
    $revSort = array_reverse($rSort);

    echo "<pre>";
      print_r($revSort);
    echo "</pre>";
    echo "<br>";

    $arrTrav = ["orange", "banana", "apple", "pineapple"];

    # ARRAY TRAVERSING FUNCTION
    echo "<b>Current: </b>" . current($arrTrav) . "<br>";
    echo "<b>Key: </b>" . key($arrTrav) . "<br>";
    echo "<b>Pos: </b>" . pos($arrTrav) . "<br>";

    # POINT TO NEXT VALUE
    next($arrTrav);
    echo "<b>Current: </b>" . current($arrTrav) . "<br>";

    # POINT TO NEXT VALUE
    next($arrTrav);
    echo "<b>Current: </b>" . current($arrTrav) . "<br>";

    # POINT TO PREVIOUS VALUE
    prev($arrTrav);
    echo "<b>Current: </b>" . current($arrTrav) . "<br>";

    # POINT TO PREVIOUS VALUE
    prev($arrTrav);
    echo "<b>Current: </b>" . current($arrTrav) . "<br>";

    # POINT TO END VALUE / MOVE TO END VALUE
    end($arrTrav);
    echo "<b>Current: </b>" . current($arrTrav) . "<br>";
    echo "<b>Key: </b>" . key($arrTrav) . "<br>";

    # POINT TO END VALUE / MOVE TO END VALUE
    reset($arrTrav);
    echo "<b>Current: </b>" . current($arrTrav) . "<br>";
    echo "<b>Key: </b>" . key($arrTrav) . "<br>";

    // $eachTrav = each($arrTrav); // PROBLEM

    # ARRAY LIST FUNCTION
    $c7 = array('red', 'green', 'blue');

    list($a, $b, $c) = $c7;

    echo "Value of a : $a <br>";
    echo "Value of b : $b <br>";
    echo "Value of c : $c <br>";

    # ARRAY EXTRACT FUNCTION
    $a = 'golden';
    $aex = array('a' => 'purple', 'b' => 'lime', 'c' => 'aqua');

    // extract($aex);
    extract($aex, EXTR_PREFIX_SAME, "test");

    echo "Value of a : $a <br>";
    echo "Value of a : $test_a <br>";
    echo "Value of b : $b <br>";
    echo "Value of c : $c <br>";

    # ARRAY COMPACT FUNCTION
    $fn = "Istiak";
    $ls = "Tushar";
    $ag = 28;
    $gender = "Male";
    $country = "Bangladesh";

    $extra = ["gender", "country"];

    $arrCompact = compact("fn", "ls", "ag", $extra);

    # ARRAY RANGE FUNCTION

    // $arrRange = range(1, 10);
    // $arrRange = range(0, 100, 10);
    $arrRange = range('a', 'h');

    foreach(range('a', 'h') as $value) {
      echo $value . "<br>";
    }


    echo "<pre>";
      print_r($arrRange);
    echo "</pre>";
    echo "<br>";
    // echo $colVal[$arrayRand[0]] . "<br>";
    // echo $colVal[$arrayRand[1]];
?>
