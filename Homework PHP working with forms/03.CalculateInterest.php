<?php
//Write a PHP script CalculateInterest.php which generates an HTML page that contains:
//•	An input text field to hold the amount of money
//•	Radio buttons to choose the currency
//•	An input text field to enter the compound annual interest amount
//•	A drop down menu to choose the period of time
//•	A submit button
//When the information is submitted, the script should print out the amount of money you will have after the selected period, rounded to 2 decimal places. Semantic HTML is required. Styling is not required. Example:
?>
<!doctype html>
<html>
    <head>
        <title>Calculate Interest</title>
        <meta charset="utf-8">
    </head>
    <body>
    <form action="" method="post">
        <label for="amount">Enter Amount</label> <input type="text" id="amount" name="amount_of_money" /><br>

        <label for="USD"></label><input type="radio" id="USD" name="currency" value="USD"> USD
        <label for="EUR"></label><input type="radio" id="EUR" name="currency" value="EUR"> EUR
        <label for="BGN"><input type="radio" id="BGN" name="currency" value="BGN">BGN</label><br>

        <label for="interest">Compound Interest Amount</label> <input type="text" id="interest" name="compound_annual_interest_amount" /><br>
        <select name="period_of_time">
            <option  value="6">6 Months</option>
            <option  value="12">1 Year</option>
            <option  value="24">2 Years</option>
            <option  value="60">5 Years</option>
        </select>
        <input type="submit" value="Calculate"/>
    </form>
    </body>
</html>
<?php
if ((isset($_POST['amount_of_money']) && ($_POST['amount_of_money'] != "")) && (isset($_POST['currency'])) && (isset($_POST['compound_annual_interest_amount']) && ($_POST['compound_annual_interest_amount'] != ""))){
    $amount_of_money = $_POST['amount_of_money'];
    $currency = $_POST['currency'];
    $compound_annual_interest_amount = $_POST['compound_annual_interest_amount'];
    $period_of_time = $_POST['period_of_time'];

$result = round($amount_of_money * pow(1 + ($compound_annual_interest_amount / 12 / 100), $period_of_time), 2);

switch ($currency) {
    case "USD":
        echo '$' . " " . $result;
        break;
    case "EUR":
        echo '&#128;' . " " . $result;
        break;
    case "BGN":
        echo $result . ' лв.';
        break;
}
}
?>