<?php
//Write a PHP script LazySundays.php which prints the dates of all Sundays in the current month. Example:
$today = getdate();
$month = $today['mon'];
$year = $today['year'];
$days = date("t");
for ($i = 1; $i <= $days; $i++) {
    $dt = strtotime("$month/$i/$year");
    $day = date("l", $dt);
    if ($day == "Sunday") {
        echo date("jS F, Y", $dt) . "</br>";
    }
}
?>

