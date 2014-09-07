<?php
//You are a very rich billionaire with an unhidden passion for cars. You like certain car manufacturers but you don’t really care about anything else, and that’s why you need your own randomizing algorithm that helps you decide how many and what color cars you should buy. Write a PHP script CarRandomizer.php that receives a string of cars from an input HTML form, separated by a comma and space (“, “). It then prints each car, a random color and a random quantity in a table like the one shown below. Use colors by your choice. Use as quantity a random number in range [1...5]. Styling the page is optional. Examples:
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Rich People's Problems</title>
    </head>
    <body>
    <form action="" method="post">
        <label for="car">Enter cars</label><input id="car" type="text" name="car" />
        <input type="submit" value="Show result" />
    </form>
    <?php
    if (isset($_POST['car']) && !empty($_POST['car'])) :
        $cars = $_POST['car'];
        $split = preg_split('/[ ,]+/', $cars);
        $split_no_empty_elements = array_filter($split);
        $count_models = count($split_no_empty_elements);
    ?>
        <table border="1">
        <tr><th>Car</th><th>Color</th><th>Count</th></tr>
    <?php endif; ?>
        <?php
        if ((isset($count_models)) && (isset($split))) :
            for ($i = 0; $i < $count_models; $i++ ) : ?>
                <?php $colors = ['red', 'blue', 'yellow', 'black', 'green', 'white', 'pink', 'purple', 'orange'];
                $random_color = array_rand($colors); ?>
                <tr><td><?=$split[$i]?></td><td><?=$colors[$random_color]?></td><td><?=rand(1, 5)?></td></tr>

            <?php endfor; ?>
        <?php endif; ?>

    </table>

    </body>
</html>