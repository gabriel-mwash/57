<?php

function add( float $firstNumber, float $secondNumber) : float {
  return $firstNumber + $secondNumber;
}

function subtract (float $firstNumber, float $secondNumber) : float {
  return $firstNumber - $secondNumber;
}

function multiply(float $firstNumber, float $secondNumber) : float {
  return $firstNumber * $secondNumber;
}

function divide(float $firstNumber, float $secondNumber) : float {
  return $firstNumber / $secondNumber;
}

while (true) {
  echo "enter first number: ";
  $firstNumber = trim(fgets(STDIN));

  echo "enter second number: ";
  $secondNumber = trim(fgets(STDIN));

  if (is_numeric($firstNumber) && is_numeric($secondNumber)) {
  echo "$firstNumber" . " + " . "$secondNumber = " . add($firstNumber,  $secondNumber) . PHP_EOL .
  "$firstNumber" . " - " . "$secondNumber = " . subtract($firstNumber, $secondNumber) . PHP_EOL . 
  "$firstNumber" . " * " . "$secondNumber = " . multiply($firstNumber, $secondNumber) . PHP_EOL . 
  "$firstNumber" . " / " . "$secondNumber = " . divide($firstNumber, $secondNumber) . PHP_EOL;
  break;
  }

  else {
    echo "please enter a numeric value" . PHP_EOL;
  }
}


// gui implementation




?>
