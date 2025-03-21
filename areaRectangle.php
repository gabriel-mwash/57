<?php

declare(strict_types=1);
define("feetConstant", 0.09290304);

function areaInFeet (float $length, float $width) : float {
  $area = round(($length * $width), 3);
  return $area;
}

function areaInMeters (float $length, float $width) : float {
  $area = round((($length * $width) * feetConstant), 3);
  return $area;
}



while (true) {
  echo "enter diemnsions in meters or feet: ";
  $units = trim(fgets(STDIN));

  if ($units == "feet") {
    echo "enter length of rectangle in feet: ";
    $length = trim(fgets(STDIN));

    echo "enter the width of rectangle in feet: ";
    $width = trim(fgets(STDIN));

    if ((is_numeric($length)) && (is_numeric($width))) {
      echo "the area is\n" .
        areaInFeet((float) $length, (float)$width) . " square feet \n"; 
    }

    elseif (($length == "quit") || ($width == "quit")) {
      exit;
    }

    else {
      echo "enter a numeric dimension please :)\n";
    }
  }

  if ($units == "meters") {
    echo "enter length of rectangle in meters: ";
    $length = trim(fgets(STDIN));

    echo "enter the width of rectangle in meters: ";
    $width = trim(fgets(STDIN));

    if ((is_numeric($length)) && (is_numeric($width))) {
      echo "the area is\n" .
        areaInMeters((float) $length, (float) $width) . " square meters";
    }

    elseif (($length == "quit") || ($width == "quit")) {
      exit;
    }

    else {
      echo "enter a numeric dimension please :)\n";
    }
  }
}

















?>
