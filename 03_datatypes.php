<?php


/*php data types 

1.String
2.Integer
3.Boolean
4.Float
5.Object
6.Array
7.NULL
*/

//String - sequence of characters 
$name = "Karan";

//Integer - Non decimal number 
$income = 400;
$debt = 90;

//Float - decimal point number 
$income = 445.5;
$debt = 90.90;

//Boolean - true and false.It can be either true and false;
$isUnderLegalAge = false;
$isUnderLegalAge = true;

//Object - Instances of classes 
class Student
{
    public $id;
}

$Student = new Student(); // Object creation 
$Student->id = 90883;

echo "$Student->id";

//Array - Used to store multiple value in a single variable
$language = ["Javascript", "typescript", "c++", "php", "python"];

//NULL - define as nothing in php 
$language = null;

    ?>