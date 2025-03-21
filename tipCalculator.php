<?php

function tip(float $billAmount, float $tipRate) : float {
  $tip = $billAmount * ($tipRate / 100);
  return round($tip, 2);
}

function validateInputs (string $billAmount, string $tipRate) : bool {
  if ((is_numeric($billAmount) && is_numeric($tipRate)) 
    && ((float) $billAmount > 0) && ((float) $tipRate > 0)) {
    return true;
  }
  else {
    return false;
  }
}

while (true) {
  echo "Enter bill amount(type Q to exit) : ";
  $billAmount =trim(fgets(STDIN));
  echo "Enter tip as percentage: ";
  $tipRate = trim(fgets(STDIN));


  if ($billAmount == "q") { 
    echo "quiting program... ";
    break;
  }

  elseif (validateInputs($billAmount, $tipRate)) {
    $total = $billAmount + tip($billAmount, $tipRate);
    echo "Tip: $" . tip($billAmount, $tipRate) . PHP_EOL;
    echo "Total: $" . round($total, 2) . PHP_EOL;
  }

  else {
    echo "please enter a valid number of the bill amount.". PHP_EOL;
  }
}


// do a gui - html and css and connect it



?>
