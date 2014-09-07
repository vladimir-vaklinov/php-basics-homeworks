<?php
//Write a PHP program TextFilter.php that takes a text from a textfield and a string of banned words from a text input field. All words included in the ban list should be replaced with asterisks "*", equal to the word’s length. The entries in the banlist will be separated by a comma and space ", ".
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Text Filter</title>
        <meta charset="UTF-8" />
    </head>
    <body>
    <form action="" method="post">
        <label for="textarea"></label>
        <textarea name="text" id="textarea" cols="30" rows="10"></textarea> <br />
        <label for="blacklist"></label>
        <input type="text" name="blacklist" id="blacklist" /> <br />
        <input type="submit" value="Submit" />
    </form>
    <?php
    if (isset($_POST['text']) && !empty($_POST['text']) && (isset($_POST['blacklist'])) && !empty($_POST['blacklist'])) {
        $text = $_POST['text'];
        $blacklist = $_POST['blacklist'];
        $blacklist_array = explode(", ", $blacklist);
        foreach ($blacklist_array as $banned_words) {
            $text = str_replace($banned_words, str_repeat('*', strlen($banned_words)), $text);
        }
        echo $text;
    }
    ?>
    </body>
</html>
<!--$string = "This dude is a mothertrucker";-->
<!--$bads = array('truck', 'shot', 'mothertrucker');-->
<!---->
<!--foreach ($bads as $bad) {-->
<!--if (strstr($string,$bad) !== false) {-->
<!--echo 'NO<br>';-->
<!--}-->
<!--else {-->
<!--echo 'YES<br>';-->
<!--}-->
<!--}-->