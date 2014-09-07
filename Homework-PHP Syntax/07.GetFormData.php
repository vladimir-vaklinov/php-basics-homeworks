<?php
//Write a PHP script GetFormData.php which retrieves the input data from an HTML form, and displays it as string.
//The input fields should hold name, age and gender (radio buttons). The returned string should be a message containing
//the information submitted by the form. 100% accuracy is NOT required. Semantic HTML is required. Example:
?>
<html>
<head>
    <title>Form Data</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="f_name" placeholder="Please enter your name"><br>
    <input type="text" name="age" placeholder="Please enter your age"><br>
    <input type="radio" name="sex" value="male">Male<br>
    <input type="radio" name="sex" value="female">Female<br>
    <input type="submit" value="submit" />
</form>
</body>
</html>
<?php
if ((isset($_POST['f_name'])) && ($_POST['f_name'] != "")) {
    $name = $_POST['f_name'];
} else {
    echo "Please enter your name." . " ";
}
if ((isset($_POST['age'])) && ($_POST['age'] != "")) {
    $age = $_POST['age'];
} else {
    echo "Please enter your age." . " ";
}
if ((isset($_POST['sex'])) && ($_POST['sex'] != "")) {
    $sex = $_POST['sex'];
} else {
    echo "Please enter your sex." . " ";
}
if ((isset($name)) && (isset($age)) && (isset($sex))) {
    echo "My name is $name. I am $age years old. I am $sex.";
}