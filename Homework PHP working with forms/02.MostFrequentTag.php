<?php
//Write a PHP script MostFrequentTag.php which generates an HTML input text field and a submit button. In the text field the user must enter different tags, separated by a comma and a space (", "). When the information is submitted, the script should generate a list of the tags, sorted by frequency. Then you must print: "Most Frequent Tag is: [most frequent tag]". Semantic HTML is required. Styling is not required.
?>
<!doctype html>
<html>
    <head>
        <title>Most Frequent Tag</title>
    </head>
    <body>
    <form action="" method="post">
        Enter Tags: </br>
        <input type="text" name="string"/>
        <input type="submit" value="submit"/>
    </form>
    </body>
</html>
<?php
if (isset($_POST['string']) && ($_POST['string'] != "")) {
    $array = $_POST['string'];
    $split = explode(", ", $array);
    $result = array_count_values($split);
    $val = array_search(max($result), $result);
    arsort($result);

foreach ($result as $key => $value) {
    echo "$key : $value times </br>";
}
    echo "Most Frequent Tag is: $val";
}
?>