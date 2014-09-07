<?php
//Write a PHP program WordMapper.php that takes a text from a textarea and prints each word and the number of times it occurs in the text. The search should be case-insensitive. The result should be printed as an HTML table.
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Word Mapping</title>
        <meta charset="utf-8" />
    </head>
    <body>
    <form action="" method="post">
    <textarea name="text_area" cols="30" rows="5"></textarea></br>
    <input type="submit" value="Count words"/>
    </form>
    <?php
    if (isset($_POST['text_area']) && !empty($_POST['text_area'])) {
        $text_area = ($_POST['text_area']);
        $text_to_lower = strtolower($text_area);
//        $text_area2 = array_map('strtolower', $text_area);
//        $text_area = array_flip(array_change_key_case(array_flip($text_area), CASE_LOWER));
        $words = str_word_count($text_to_lower, 1); //Import words into array
        $word_frequencies = array_count_values($words); //Count same values
        arsort($word_frequencies); //Ascending sort
//        print_r($word_frequencies);
        foreach ($word_frequencies as $key => $value) { ?>
            <table border="1px solid black" width="80px">
                <tr>
                    <td width="auto"><?=$key?></td>
                    <td width="10px"><?=$value?></td>
                </tr>
            </table>
    <?php
        }
    }

    ?>

    </body>
</html>