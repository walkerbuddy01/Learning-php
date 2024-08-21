<?php

$name = "Karan Sharma";
echo $name;
//strLen - gives the length of the string
echo "<br>";
echo strlen($name);
// . - it used to concatenate the string or join string
echo "<br>";
echo "the length of my string " . strlen($name);

// str_word_count - count total number of words
echo "<br>";
echo "" . str_word_count($name) . "<br>";

//strrev - used to reverse string
echo "<br>";
echo "" . strrev($name) . "";

//strpos - get the starting position of the given word in the string
echo "<br>";
echo "" . strpos("Sharma", $name) . "<br>";

//str_replace - it replace the word in the string;

echo "<br>";
echo "" . str_replace("Karan", "Pandey", $name) . "<br>";

//str_repeat - used to repeat a string multiple times 
echo "<br>";
echo "" . str_repeat($name, 4) . "";

//rtrim - it trim spaces on the right side
//ltrim - it trim spaces on the left side
echo "<br>";

echo "<pre>";
echo rtrim("        hellopaji  ");
echo "</pre>";

echo "<pre>";
echo ltrim("        hellopaji  ");
echo "</pre>";





    ?>