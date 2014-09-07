<?php
//Write a PHP script TimeUntilNewYear.php. Use the built-in function getdate() to get the current date and
//time. Print how many hours, minutes and seconds are left until New Year and how many days, hours, minutes and seconds
//are left in a counter format . Look at examples below to get a better idea. The examples show the current date and
//time in "d-m-Y G:i:s" format. Use the current time. Check here for date/time formats in PHP.
//(Note: Keep the Spring/Autumn time shifts in mind in your calculations.)
date_default_timezone_set('Europe/Sofia');
$now=time();

//echo(date("Y-m-d H-i-s",$now)) . PHP_EOL; PRINT DATE AND TIME
$year = date("Y");
//$now = strtotime("12-08-2014 13:07:09"); EXAMPLE
$timestamp = strtotime("31-12-$year 23:59:59");

$seconds = $timestamp - $now - 3600;
$hours = floor($seconds / 3600);
$minutes = floor($seconds / 60);

echo "Hours until new year : " . $hours . "</br>";
echo "Minutes until new year : " . $minutes . "</br>";;
echo "Seconds until new year : " . $seconds . "</br>";

$days_in_counter = floor($seconds / 86400);
$hours_in_counter = floor(($seconds - $days_in_counter * 86400) / 3600);
$minutes_in_counter = floor(($seconds - $days_in_counter * 86400 - $hours_in_counter * 3600) / 60);
$seconds_in_counter = ($seconds - $days_in_counter * 86400 - $hours_in_counter * 3600 - $minutes_in_counter * 60);

echo "Days:Hours:Minutes:Seconds " . $days_in_counter . ":" . $hours_in_counter . ":" . $minutes_in_counter . ":" . $seconds_in_counter;

