<?php

$a = 5;

while ($a <= 10) {
    echo "PRINT THIS WHEN $a" . "<br>";
    $a++;
}


for ($i = 0; $i < 10; $i++) {
    echo "Print this when $i" . "<br>";
}



$fruits = ["apple", "banana", "grapes", "blueberries"];

foreach ($fruits as $value => $key) {
    echo "$key" . "<br>";
    echo "$value" . "<br>";
}

?>