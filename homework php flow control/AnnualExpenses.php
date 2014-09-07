<?php
//Write a PHP script AnnualExpenses.php that receives n years from an input HTML form and creates a table (like the one shown below) with random expenses by months and the corresponding years (n years back). For example, if N is 10, create a table that shows the expenses for each month for the last 10 years. Add a "Total" column at the end, showing the total expenses for the same year. The random expenses in the table should be in the range [0…999]. Styling the page is optional. Examples:
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Show Annual Expenses</title>
        <meta charset="utf-8" ?>
    </head>
    <body>
    <form action="" method="post">
        <label for="number_of _years">Enter number of years</label>
        <input  id="number_of _years" type="text" name="number_of_years"/>
        <input type="submit" value="Show costs"/>
    </form>
    <br />
    <?php
    if (isset($_POST['number_of_years']) && !empty($_POST['number_of_years'])) :
    $n = $_POST['number_of_years'];
    ?>
    <table border="1px">
        <tr>
            <th>Year</th>
            <th>January</th>
            <th>February</th>
            <th>March</th>
            <th>April</th>
            <th>May</th>
            <th>June</th>
            <th>July</th>
            <th>August</th>
            <th>September</th>
            <th>October</th>
            <th>November</th>
            <th>December</th>
            <th>Total</th>
        </tr>

    <?php
    $year = date("Y");

    for ($year, $i = 0; $i < $n; $i++, $year-- ) :

         $sum = 0;?>
        <tr>
            <td><?=$year?></td><?php $rand_number = rand(0, 999); ?>
            <td><?=$rand_number?></td><?php  $sum += $rand_number; $rand_number = rand(0, 999);  ?>

            <td><?=$rand_number?></td><?php  $sum += $rand_number; $rand_number = rand(0, 999); ?>

            <td><?=$rand_number?></td><?php  $sum += $rand_number; $rand_number = rand(0, 999); ?>

            <td><?=$rand_number?></td><?php  $sum += $rand_number; $rand_number = rand(0, 999); ?>

            <td><?=$rand_number?></td><?php  $sum += $rand_number; $rand_number = rand(0, 999); ?>

            <td><?=$rand_number?></td><?php $sum += $rand_number; $rand_number = rand(0, 999); ?>

            <td><?=$rand_number?></td><?php $sum += $rand_number; $rand_number = rand(0, 999); ?>

            <td><?=$rand_number?></td><?php $sum += $rand_number; $rand_number = rand(0, 999); ?>

            <td><?=$rand_number?></td><?php $sum += $rand_number; $rand_number = rand(0, 999); ?>

            <td><?=$rand_number?></td><?php $sum += $rand_number; $rand_number = rand(0, 999); ?>

            <td><?=$rand_number?></td><?php $sum += $rand_number; $rand_number = rand(0, 999); ?>

            <td><?=$rand_number?></td><?php $sum += $rand_number; $rand_number = rand(0, 999); ?>

            <td><?=$sum?></td>

        </tr>

    <?php endfor; ?>
    <?php endif; ?>
    </table>
    </body>
</html>