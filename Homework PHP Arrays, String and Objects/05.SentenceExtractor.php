<?php
//Write a PHP program SentenceExtractor.php that takes a text from a textarea and a word from an input field and prints all sentences from the text, containing that word. A sentence is any sequence of words ending with ., ! or ?.
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sentence Extractor</title>
        <meta charset="UTF-8" />
    </head>
    <body>
    <form action="" method="post">
        <label for="text"></label>
        <textarea name="text" id="text" cols="30" rows="10"></textarea><br />
        <label for="word"></label>
        <input type="text" name="word" id="word" /><br />
        <input type="submit" />
    </form>
    <?php
    if (isset($_POST['text']) && !empty($_POST['text']) && (isset($_POST['word'])) && !empty($_POST['word'])) {
        $text = $_POST['text'];
        $word = $_POST['word'];
    $pattern = '/[^\.\?!]*(\b'.$word.'\b)[^\.\?!]*[\.\?!]( |$)/i';
    preg_match_all($pattern, $text, $matches);

    foreach($matches[0] as  $sentence){
        echo $sentence, '<br/>';
    }

    }
    ?>
    </body>
</html>