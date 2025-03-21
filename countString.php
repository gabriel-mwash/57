<?php

while (true)  {
  echo "enter input string: ";

  $string = trim(strval(fgets(STDIN)));

  if ($string == "")  echo "enter a valid string\n";

  elseif ($string == "quit") break;

  else echo "$string has " . strlen($string) . " characters\n ";
}

// work on gui

?>
