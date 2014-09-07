<?php
//Write a PHP program TextColorer.php that takes a text from a textfield, colors each character according to its ASCII value and prints the result. If the ASCII value of a character is odd, the character should be printed in blue. If it’s even, it should be printed in red.
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Coloring Texts</title>
        <meta charset="utf-8" />
    </head>
    <body>
    <style>
        #red {
            color: red;
        }
        #blue {
            color: blue;
        }
    </style>
    <form action="" method="post">
        <textarea name="textarea" id="text" cols="30" rows="5"></textarea><br/>
        <input type="submit" value="Color text" <br/>
    </form>
    <?php
    if (isset($_POST['textarea']) && !empty($_POST['textarea'])) {
        $text = $_POST['textarea'];
        $length = strlen($text);
        for ($i = 0; $i < $length; $i++) {
            $ascii_number = ord($text[$i]);
            if ($ascii_number % 2 == 0) {
                echo "<span id='red'>$text[$i] </span>";
//                echo "<span class='red'>$text[$i]</span>";
            } else {
                echo "<span id='blue'>$text[$i] </span>";
            }
        }
    }
?>
</body>
</html>
