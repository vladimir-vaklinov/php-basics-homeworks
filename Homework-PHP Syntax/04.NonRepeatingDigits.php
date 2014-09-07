<?php
//Write a PHP script NonRepeatingDigits.php that declares an integer variable N, and then finds all 3-digit numbers that are less or equal than N (<= N) and consist of unique digits. Print "no" if no such numbers exist. Examples:
$N = 500;

if ($N < 102) {
    echo "no";
}
$result = "";
if ($N > 987) {
    for ($N = 102; $N <= 987; $N++) {
        $third_digit = $N % 10;
        $second_digit = ($N / 10) % 10;
        $first_digit = ($N / 100) % 10;
        $var = $first_digit . $second_digit . $third_digit;

    if (($first_digit != $second_digit) && ($first_digit != $third_digit) && ($second_digit != $third_digit)) {
            $result = $result . $var . ', ';
        }
   }
    echo ltrim($result,', ');
    echo rtrim($result,', ');
} else {
   for ($i = 102; $i <= $N; $i++) {
       $third_digit = $i % 10;
       $second_digit = ($i / 10) % 10;
       $first_digit = ($i / 100) % 10;
       $var = $first_digit . $second_digit . $third_digit;

       if (($first_digit != $second_digit) && ($first_digit != $third_digit) && ($second_digit != $third_digit)) {
           $result = $result . $var . ', ';
       }
   }
    echo ltrim($result,', ');
    echo rtrim($result,', ');
}
?>
