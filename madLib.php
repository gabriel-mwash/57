<?php


echo "Enter a noun: ";
$noun = trim(fgets(STDIN));
echo "Enter a verb: ";
$verb = trim(fgets(STDIN));
echo "Enter an adjective: ";
$adjective = trim(fgets(STDIN));
echo "Enter an adverb: ";
$adverb = trim(fgets(STDIN));

//echo "do you $verb your $adjective $noun $adverb ? That's hilarious";

if ($noun == "benz") {
  echo sprintf("do you %s your %s %s %s ? That's hilarious",
    $verb, $adjective, $noun, $adverb);
}
elseif ($noun == "harrier") {
  echo sprintf("I thought you didn't love %s! Anway, %s are the" . 
    "best ones, Imagine driving %s in a hilly sky".
    ", and the sunset is a perfect %s", 
    $noun, $adjective, $adverb, $verb );
}

?>
