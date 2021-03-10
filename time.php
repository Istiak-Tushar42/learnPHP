<?php
  # PHP Time Function
  date_default_timezone_set("Asia/Dhaka");

  # PHP Mktime & Gmmktime Function

  echo "Time & Date: " . date("d/m/Y h:i:s a") . "<br><br>";


  # MKTIME FUNCTION => SHOW LOCAL TIMEZONE ON THE SERVER
  echo date("d/m/Y h:i:s a", mktime(0, 0, 0, 3, 4, 2003)) . "<br><br>"; // GET DATE AND TIME FROM THE PAST

  # GMMKTIME FUNCTION => SHOW EUROPIAN TIMEZONE ON THE SERVER
  echo date("d/m/Y h:i:s a", gmmktime(0, 0, 0, 3, 4, 2003)) . "<br><br>"; // GET DATE AND TIME FROM THE PAST

  # PHP Date_create & Date_format Function

  # DATE_CREATE FUNCTION
  $date = date_create("2023-04-03 22:25:00", timezone_open("Asia/Dhaka")); // RETURN AN OBJECT

  # DATE_FORMAT FUNCTION
  echo date_format($date, "d/m/Y H:i:s") . "<br><br>"; // TAKE OBJECT TO PRINT CREATED DATE

  # PHP Checkdate & Date_diff Function

  # CHECKDATE FUNCTION
  echo checkdate(4, 3, 2003) . "<br><br>";

  $date1 = date_create("2003/04/03");
  $date2 = date_create("2003/12/12");

  # DATE_DIFF FUNCTION
  $diff = date_diff($date1, $date2); // RETURN DIFFERECE BETWEEN DAYS

  // echo "Difference between date1 and date2: " . $diff -> days . "days";

  echo $diff -> format("%r%a days"); // %r doesn't show (+) sign but (-) sign show, %a for total days

  echo "<pre>";
    print_r($diff);
  echo "</pre>";
  echo "<br>";

  # PHP Date_add, Date_sub & Date_modify Function

  $date = date_create("2003/04/03");

  # DATE_ADD FUNCTION
  date_add($date, date_interval_create_from_date_string("30 days"));  // ADD DAYS INSIDE EXSISTING DATE

  echo date_format($date, "d/m/Y") . "<br><br>";

  # DATE_SUB FUNCTION
  date_sub($date, date_interval_create_from_date_string("10 days"));  // SUBTRACT DAYS INSIDE EXSISTING DATE

  echo date_format($date, "d/m/Y") . "<br><br>";

  # DATE_MODIFY FUNCTION
  date_modify($date, "-10 days");  // MODIFY DAYS INSIDE EXSISTING DATE
  date_modify($date, "10 days");  // MODIFY DAYS INSIDE EXSISTING DATE

  echo date_format($date, "d/m/Y") . "<br><br>";

  # PHP Getdate, Localtime, Gettimeofday Function

  # GETDATE FUNCTION
  echo "<pre>";
    print_r(getdate()); // RETURN CURRENT DATE
  echo "</pre>";
  echo "<br>";

  $olddate = mktime(0, 0, 0, 04, 03, 2003);

  $date = getdate($olddate);

  echo $date['mday'] . " - " . $date['month'] . " - " .$date['year'] . "<br><br>";

  # LOCALTIME FUNCTION
  echo "<pre>";
    // print_r(localtime(time(), true)); // RETURN LOCAL CURRENT TIME => RETURN INDEX ARRAY
    print_r(localtime($olddate, true)); // RETURN LOCAL CURRENT TIME => RETURN INDEX ARRAY
  echo "</pre>";
  echo "<br>";

  # GETTIMEOFDAY FUNCTION
  echo "<pre>";
    print_r(gettimeofday()); // RETURN CURRENT TIME
  echo "</pre>";
  echo "<br>";

  $date = gettimeofday(); // RETURN ASSOCIATIVE ARRAY

  echo $date['sec'] . "<br><br>";

  echo gettimeofday(true) . "<br><br>";

  #PHP Date_parse Function

  $date = date_parse("2003/04/03 12:30:25.5");

  echo $date['day'] . "<br><br>";

  echo "<pre>";
    print_r(date_parse_from_format("d.n.Y", "03.04.2003"));
  echo "</pre>";
  echo "<br>";

  # PHP Strtotime, Strftime, Gmstrftime Function

  # STRTOTIME FUNCTION => STRING TO DATE
  echo(date("d/m/Y h:m:s a", strtotime("now"))) . "<br><br>";
  echo(date("d/m/Y h:m:s a", strtotime("3rd April 2003"))) . "<br><br>";
  echo(date("d/m/Y h:m:s a", strtotime("+5 hours"))) . "<br><br>";
  echo(date("d/m/Y h:m:s a", strtotime("+5 week"))) . "<br><br>";
  echo(date("d/m/Y h:m:s a", strtotime("+5 week 3 days 7 hours 55 seconds"))) . "<br><br>";
  echo(date("d/m/Y h:m:s a", strtotime("+5 month"))) . "<br><br>";
  echo(date("d/m/Y h:m:s a", strtotime("+5 year"))) . "<br><br>";
  echo(date("d/m/Y h:m:s a", strtotime("next friday"))) . "<br><br>";
  echo(date("d/m/Y h:m:s a", strtotime("last friday"))) . "<br><br>";
  echo(date("d/m/Y h:m:s a", strtotime("first day of last month"))) . "<br><br>";

  # STRFTIME FUNCTION
  echo strftime("%B %d %Y, %X %Z") . "<br><br>";
  echo strftime("%B %d %Y, %X %Z", mktime(21,30,25,04,03,2003)) . "<br><br>";
  echo strftime("%d/%m/%Y %H:%M:%S", mktime(21,30,25,04,03,2003)) . "<br><br>";

  # GMSTRFTIME FUNCTION
  echo gmstrftime("%d/%m/%Y %H:%M:%S", mktime(21,30,25,04,03,2003)) . "<br><br>";

  # PHP Date_time_set Function
  $date = date_create("1993/09/06");

  # DATE_TIME_SET FUNCTION
  date_time_set($date, 13, 14, 15, 16);

  echo date_format($date, "d/m/Y H:i:s") . "<br><br>";

  # PHP TimeZone Functions
  date_default_timezone_set("Asia/Dhaka");
  echo date_default_timezone_get() . "<br><br>";

  $tz = timezone_open("Asia/Dhaka");
  echo timezone_name_get($tz) . "<br><br>";

  echo "<pre>";
    print_r(timezone_location_get($tz));
  echo "</pre>";
  echo "<br>";

  echo "<pre>";
    print_r(timezone_identifiers_list());
  echo "</pre>";
  echo "<br>";








?>
