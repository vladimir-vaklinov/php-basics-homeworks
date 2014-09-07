<?php
//Write a PHP script InformationTable.php which generates an HTML table by given information about a person (name, phone
//number, age, address). Styling the table is optional. Semantic HTML is required. Examples:
$name = "Gosho";
$phone_number = "0882-321-423";
$age = 24;
$address = "Hadji Dimitar";
?>
<style>
    table {border-collapse: collapse;}
    td { width: 100px; border: 1px solid black;}
    td:first-child { background-color: #ff9c00; font-weight: bold; padding-left: 5px;}
    td:nth-child(2){ text-align: right; padding-right: 5px;}

</style>
<table>
    <tr>
        <td>Name</td><td><?php  echo $name; ?></td>
    </tr>
    <tr>
        <td>Phone number</td><td><?php echo $phone_number; ?></td>
    </tr>
    <tr>
        <td>Age</td><td><?php echo $age; ?></td>
    </tr>
    <tr>
        <td>Address</td><td><?php echo $address; ?></td>
    </tr>
</table>