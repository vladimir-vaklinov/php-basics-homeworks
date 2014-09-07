<?php
//Write a PHP script SquareRootSum.php that displays a table in your browser with 2 columns. The first column should contain a number (even numbers from 0 to 100) and the second column should contain the square root of that number, rounded to the second digit after the decimal point. The last row of the table should contain the sum of all values in the Square column. Styling the page is optional. Partial output comes below:
?>
<!DOCTYPE html>
<html>
<head>
    <title>Square Root Sum</title>
    <link rel="stylesheet" href="styles.css" />
</head>
<body>
<table border="1px">
    <tr>
        <th>Number</th>
        <th>Square root</th>
    </tr>
    <?php
    $sum = 0;
    for ($i = 0; $i <= 100; $i += 2) :
        $sqrt = sqrt($i);
        $sum += $sqrt;
        $sqrt_rounded = round($sqrt, 2);
    ?>
    <tr><td><?=$i?></td><td><?=$sqrt_rounded?></td></tr>
    <?php endfor; ?>
    <tr><td id="total">Total</td><td id="sum"><?=round($sum, 2)?></td></tr>



</table>
</body>
</html>
