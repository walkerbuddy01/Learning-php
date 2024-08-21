<?php

//function - function is code block which perfrom some task and can be reused as many times;

// function FunctionName() : Returntype {

// }

function helloGreeting($name): void
{
    echo "Hello world! form function by $name ";
}
;

function binarySearch($arr, $value)
{
    $start = 0;
    $end = count($arr) - 1;

    $mid = $start + $end / 2;

    while ($start < $end) {
        if ($arr[$mid] === $value) {
            return $mid;
        } elseif ($arr[$mid] > $value) {
            echo "end: $end" . "<br>";
            $end = $mid - 1;
        } elseif ($arr[$mid] < $value) {
            echo "$start" . "<br>";
            $start = $mid + 1;
        }
        $mid = $start + $end / 2;
    }

    return $mid;
}
;

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13];
$ans = binarySearch($arr, 12);

// echo "$ans";

helloGreeting("Value");


?>