<?php
//Write a PHP script DumpVariable.php that declares a variable. If the variable is numeric, print it by the
//built-in function var_dump(). If the variable is not numeric, print its type at the input. Examples:



$variable = 15;

if (is_numeric($variable)) {
     var_dump($variable);
} else {
    echo gettype($variable);
}