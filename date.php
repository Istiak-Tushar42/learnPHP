<?php
  # PHP Date Function

  # DATE FUNCTION FOR GET DAY
  echo "Today is " . date("d") . "<br>"; // USE FOR GET DAY WITH => 0
  echo "Today is " . date("j") . "<br>"; // USE FOR GET DAY WITHOUT => 0
  echo "Today is " . date("jS") . "<br>"; // USE FOR GET FOR DAY WITH => ST, ND, RD, TH

  # DATE FUNCTION FOR GET MONTH
  echo "Month is " . date("F") . "<br>"; // USE FOR GET MONTH NAME
  echo "Month is " . date("m") . "<br>"; // USE FOR GET MONTH WITH => 0
  echo "Month is " . date("n") . "<br>"; // USE FOR GET MONTH WITHOUT => 0
  echo "Month is " . date("M") . "<br>"; // USE FOR GET FIRST 3 LETTERS OF MONTH NAME

  # DATE FUNCTION FOR GET YEAR
  echo "Year is " . date("Y") . "<br>"; // USE FOR GET FULL YEAR
  echo "Year is " . date("y") . "<br>"; // USE FOR GET LAST 2 DIGIT OF YEAR

  # GET FUNCTION FOR GET FULL DATE
  echo "Full date is " . date("d/m/Y") . "<br>";

  # DATE FUNCTION FOR GET WEEK
  echo "Week day is " . date("D") . "<br>"; // USE FOR GET 3 DIGIT OF WEEK DAY
  echo "Week day is " . date("l") . "<br>"; // USE FOR GET FULL DAY NAME OF WEEK
  echo "Week day is " . date("N") . "<br>"; // USE FOR GET NUMERIC VALUE OF WEEK => Start From 1
  echo "Week day is " . date("w") . "<br>"; // USE FOR GET NUMERIC VALUE OF WEEK => Start from 0


  echo "Day of the year is " . date("z") . "<br>"; // USE FOR GET WHICH DAY FROM YEAR
  echo "Week of the year is " . date("W") . "<br>"; // USE FOR GET WHICH WEEK FROM YEAR
  echo "Days of month is " . date("t") . "<br>"; // USE FOR GET TOTAL DAYS OF THE MONTHS
  echo "Is this is leapyear " . date("L") . "<br>"; // USE FOR GET LEAPYEAR OR NOT!
