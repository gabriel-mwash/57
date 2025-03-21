<?php

$currentYear = intval(date("Y"));

echo "Enter current age: ";
$currentAge = intval(trim(fgets(STDIN)));

echo "Enter retire age: ";
$retireAge = intval(trim(fgets(STDIN)));

$yearsToRetire = $retireAge - $currentAge;
$yearToRetire = $currentYear + $yearsToRetire;

if ($yearsToRetire < 0) {
  echo "yo can retire";
}

else {
  echo "you have $yearsToRetire years left until you can retire". PHP_EOL . 
   "It's $currentYear, so you can retire in $yearToRetire";
}




?>
