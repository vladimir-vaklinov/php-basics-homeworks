<?php
//Write a PHP script HTMLTagsCounter.php which generates an HTML form like in the example below. It should contain a label, an input text field and a submit button. The user enters HTML tag in the input field. If the tag is valid, the script should print "Valid HTML tag!”, and if it is invalid – "Invalid HTML Tag!”. On the second line, there should be a score counter. For every valid tag entered, the score should increase by 1.
//Hint: You may use sessions. Use an array to store all valid HTML5 tags.
$html5_tags = array("a","abbr","address","area","article","aside","audio","b","base","bdi","bdo","blockquote","body","br","button","canvas","caption","cite","code","col","colgroup","data","datalist","dd","del",  "details","dfn","div","dl","dt","em","embed","fieldset","figcaption","figure","footer","form",  "h1","h2","h3","h4","h5","h6","head","header","hr","html","i","iframe","img",
"input","ins","keygen","kbd","label","legend","li","link","main","map","mark","math","menu", "meta","meter","nav","noscript","object","ol","optgroup","option","output","p",   "param","pre","progress","q","rp","rt","ruby","s","samp","script","section","select", "small","source","span","strong","style","sub","sup","summary","svg","table","tbody","td","template","textarea","tfoot","th","thead","time","title","tr","track","u","ul","var","video","wbr");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>HTML Tags Counter</title>
        <meta charset="utf-8" />
    </head>
    <body>
    <form action="" method="post">
        <label for="tag">Enter HTML tags</label><br>
        <input type="text" id="tag" name="check_tag" />
        <input type="submit" value="submit" />
    </form>
    </body>
</html>
<?php

session_start();
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
}

if (isset($_POST['check_tag'])) {
    $tag = $_POST['check_tag'];
    $tag = strtolower($tag);
    if (in_array($tag, $html5_tags)) {
        $correct = True;
        echo '<p style="font-size:30px"; font-weight:bold>' . "Valid HTML tag!" . "<br>";
        $tag = "";
        unset($_POST['check_tag']);
    } else {
        $correct = False;
        echo '<p style="font-size:30px"; font-weight:bold>' . "Invalid HTML tag!" . "<br>";

    }

if ($correct)  {
    $_SESSION['count']++;
}
    echo "Score : " . $_SESSION['count'];
}
?>


