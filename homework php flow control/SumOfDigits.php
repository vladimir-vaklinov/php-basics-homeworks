<?php
//Write a PHP script SumOfDigits.php which receives a comma-separated list of integers from an input form and creates a two-column table. The first column should contain each of the values from the input. The second column should contain the sum of the digits of each value. If the value is not an integer number, print "I cannot sum that". Styling the page is optional. Example:
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sum of Digits</title>
        <meta charset="utf-8" />
    </head>
    <body>
    <form action="" method="post">
        <label for="input">Input string:</label>
        <input id="input" type="text" name="input" />
        <input type="submit" value="Submit" />
    </form>
    <?php
    if (isset($_POST['input']) && !empty($_POST['input'])) {
        $input = $_POST['input'];
        $split = preg_split('/[ ,]+/', $input);

        $split_no_empty_elements = array_filter($split); //remove empty elements

        $count_elements = count($split_no_empty_elements); //find size of array

        $sum = 0;
        for ($i = 0; $i < $count_elements; $i++) {
            $element_number = $split_no_empty_elements[$i]; //store element from array in variable
            $element_as_array = str_split($element_number); //converting element into array
            if (is_numeric($split_no_empty_elements[$i])) { //checking if element is number
                foreach ($element_as_array as $number) {
                    $sum += $number;
                }
            } else {
                $sum = "I cannot sum that";
            }
            ?>
           <table border="1px solid black">
               <tr>
                   <td ><?=$split_no_empty_elements[$i]?></td>
                   <td><?=$sum?></td><?php $sum = 0; ?>
               </tr>
           </table>
    <?php
        }
    }
    ?>

    </body>
</html>