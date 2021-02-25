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

    echo "<table border='2px' cellpadding='5px' cellspacing='0'>";
    echo "<tr>
              <th>ID</th>
              <th>Name</th>
              <th>Designation</th>
              <th>Salary</th>
          </tr>";
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

    // echo sizeof($food);
    // echo count($food);

    echo in_array("Apple", $food);

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
    $foo = array('a' => 'Apple', 'b' => 'banana', 'c' => 'Orange');
?>
