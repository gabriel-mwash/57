<?php

echo "enter the quote: ";
$quote = trim(fgets(STDIN));

echo "author of quote: ";
$author = trim(fgets(STDIN));

echo $author . "says," . ' "' . $quote .  '"';

?>
