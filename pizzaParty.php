<?php


declare(strict_types=1);

define("slicePizza", 8);


while (true) {
  echo "enter number of people: ";
  $numberOfPeople = trim(fgets(STDIN));

  echo "enter number of pizzas: ";
  $numberOfPizza = trim(fgets(STDIN));

  if (is_numeric($numberOfPeople) || is_numeric($numberOfPizza)

  echo "$numberOfPeople with $numberOfPizza piizas\n";
  echo "Each person gets " . ($numberOfPizza * slicePizza) / $numberOfPeople .
    " pieces of pizza\n";
  echo "There are " . ($numberOfPizza * slicePizza) % $numberOfPeople . 
    " leftover pieces";
}

?>
