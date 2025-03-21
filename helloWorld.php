<?php

/*
echo "What is your name? -> : ";
// trim(strval(fgets(STDIN)));

echo "Hello, " . trim( (string) fgets(STDIN)). ", nice to meet you!";
 */

while (true) {
  echo "what is your name: ";

  $name = trim((string) fgets(STDIN));

  if ($name == "gabriel") {
    echo "hello $name, you are loved\n";
  }
  elseif ($name == "mwashighadi") {
    echo "hello $name, you are an amazing person\n";
  }
  elseif ($name == "quit") {
    break;
  }
  else {
    echo "hello $name, you bring" .  
      " into this world what no one else brings\n";
  }
}

?>
