<?php
//Write a PHP script SumTwoNumbers.php that decleares two variables, firstNumber and secondNumber. They
// should hold integer or floating-point numbers (hard-coded values). Print their sum in the output in the format
// shown in the examples below. The numbers should be rounded to the second number after the decimal point.
// Find in Internet how to round a given number in PHP. Examples:

$firstNumber = 1.567808;
$secondNumber = 0.356;
$sum = $firstNumber + $secondNumber;

echo '$firstNumber + $secondNumber = ' . $firstNumber . " + " . $secondNumber . " = " . round($sum, 2);
