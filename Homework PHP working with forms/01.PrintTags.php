<?php
//Write a PHP script PrintTags.php which generates an HTML input text field and a submit button. In the text field the user must enter different tags, separated by a comma and a space (", "). When the information is submitted, the script should split the tags, put them in an array and print out the array. Semantic HTML is required. Styling is not required. Example:

if (isset($_POST['array'])) {
    $arr = $_POST['array'];
    $split_arr = explode(", ", $arr);
    $result = "";
for ($i = 0; $i < count($split_arr); $i++) {
    $result .= "$i : $split_arr[$i]" . '</br>';
}
}
?>
<html>
    <head>
        <title>Print Tag</title>
    </head>
    <body>
        <form action=""; method="post">
            Enter Tags : <br><input type="text" name="array"/>
            <input type="submit" value="submit"/>
        </form>
    </body>
</html>
<?php
if (isset($result)) {
    echo $result;
}
?>

