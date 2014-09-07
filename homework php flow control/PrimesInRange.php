<?php
//Write a PHP script PrimesInRange.php that receives two numbers – start and end – from an input field and displays all numbers in that range as a comma-separated list. Prime numbers should be bolded. Styling the page is optional. Examples:
?>
<!DOCTYPE html>
<html>
<head>
    <title>Find Primes in Range</title>
    <meta charset="UTF-8" />
</head>
<body>
<form action="" method="post">
    <label for="start">Starting index:</label>
    <input id="start" type="text" name="start_number" />
    <label for="end">End:</label>
    <input id="end" type="text" name="end_number"/>
    <input type="submit" value="Submit" />
</form>
<?php


$result = "";

if ((isset($_POST['start_number'])) && (isset($_POST['end_number'])) && (!($_POST['start_number'] == "" )) && (!($_POST['end_number'] == "" ))) {
    echo "Numbers in red are prime:";
    $start_number = $_POST['start_number'];
    $end_number = $_POST['end_number'];

    if ($start_number == 1) {
        $result .= 1 . " ";
        $start_number = 2;
    }

    for ($start_number; $start_number <= $end_number; $start_number++) {
        $count = 0;
        if ($start_number < 2) {
            $count = 2;

        }
        if ($start_number > 1) {
            $count = 0;
        for ($i = 1; $i <= sqrt($start_number); $i++) {

            if ($start_number % $i == 0) {
                $count++;
            }
        }
        }
        if ($count > 1) {

            $result .=  $start_number . ", ";
        } else { ?>
            <?php $result .= '<span style="font-weight: bold; color: #ff0511;">' . $start_number . '</span>, ';?>

        <?php }

    }
}
$trim_result = rtrim($result, ', ');
echo $trim_result;

?>
</body>
</html>