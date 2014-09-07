<?php
//Write a PHP script StringModifier.php which receives a string from an input form and modifies it according to the selected option (radio button). You should support the following operations: palindrome check, reverse string, split to extract letters only, hash the string with the default PHP hashing algorithm, shuffle the string characters randomly. The result should be displayed right under the input field. Styling the page is optional. Think about which of the modification can be achieved with already built-in functions in PHP. Where necessary, write your own algorithms to modify the given string. Hint: Use the crypt() function for the "Hash String" modification. Examples:/
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
    <head>
        <title>Modify String</title>
        <meta charset="utf-8" />
    </head>
    <body>
    <form action="" method="post">
        <label for="input"></label>
        <input id="input" type="text" name="input" placeholder="Enter a string" />

        <label for="palindrome"></label><input type="radio" id="palindrome" name="string_modify" value="check_palindrome" checked>Check Palindrome
        <label for="reverse"></label><input type="radio" id="reverse" name="string_modify" value="reverse_string">Reverse String
        <label for="split"></label><input type="radio" id="split" name="string_modify" value="split">Split
        <label for="hash"></label><input type="radio" id="hash" name="string_modify" value="hash_string">Hash String
        <label for="shuffle"></label><input type="radio" id="shuffle" name="string_modify" value="shuffle_string">Shuffle String
        <input type="submit" value="Submit" />

    </form>

    <?php
    if (isset($_POST['input']) && !empty($_POST['input'])) {
        $string = $_POST['input'];
         $radio_button_selected = $_POST['string_modify'];
//        echo $radio_button_selected;
        switch ($radio_button_selected) {
            case "check_palindrome":
                echo check_palindrome($string);
                break;
            case "reverse_string":
                echo reverse_string($string);
                break;
            case "split":
                echo split_string($string);
                break;
            case "hash_string":
                echo hash_string($string);
                break;
            case "shuffle_string":
                echo shuffle_string($string);
                break;
        }
    }
    function check_palindrome($value) {
        $string = $_POST['input'];
        $reversed = strrev($string);
        if ($string == $reversed) {
            echo $string . " is a palindrome";
        } else {
            echo $string . " is not a palindrome";
        }
    }

    function reverse_string($value) {
        $string = $_POST['input'];
        $reversed = strrev($string);
        echo $reversed;
    }

    function split_string($value) {
        $string = $_POST['input'];

        $no_empty_elements = str_replace(' ', '', $string);
        $array = str_split($no_empty_elements);

        foreach ($array as $value) {
            echo $value . " ";
        }
    }

    function hash_string($value) {
        $string = $_POST['input'];
        $hash = crypt($string);
        echo $hash;
    }

    function shuffle_string($value) {
        $string = $_POST['input'];
        $shuffle = str_shuffle($string);
        echo $shuffle;
    }
    ?>

    </body>
</html>