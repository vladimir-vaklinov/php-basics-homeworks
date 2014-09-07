<?php
//Write a PHP program URLReplacer.php that takes a text from a textarea and replaces all URLs with the HTML syntax <a href= "…" ></a> with a special forum-style syntax [URL=…][/URL].
?>
<!DOCTYPE html>
<html>
<head>
    <title>URL Replacer</title>
    <meta charset="UTF-8">
</head>
<body>
<form method="post">
    <textarea name="text"></textarea><br>
    <input type="submit" value="Replace URL's"/>
</form>
<?php
if (isset($_POST['text'])) {
    $text = ($_POST['text']);
    $text = str_replace('</a>', '[/URL]', $text);
    $text = preg_replace('/<a href="(.*?)">/', '[URL=\1]', $text);
    echo $text;
}
?>
</body>
</html>