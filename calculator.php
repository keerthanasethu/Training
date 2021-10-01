<?php
if (isset($_POST['submit']))
{
    if(is_numeric($_POST['Number1']) && is_numeric($_POST['Number2']))
{
    if($_POST['Operator'] == 'Addition')
    {
        $total = $_POST['Number1'] + $_POST['Number2'];
    }
    if($_POST['Operator'] == 'Substraction')
    {
        $total = $_POST['Number1'] - $_POST['Number2'];
    }
    if($_POST['Operator'] == 'Multiplication')
    {
        $total = $_POST['Number1'] * $_POST['Number2'];
    }
    if($_POST['Operator'] == 'Division')
    {
        $total = $_POST['Number1'] % $_POST['Number2'];
    }
    echo "<h1> {$_POST['Number1']} {$_POST['Operator']} {$_POST['Number2']} equals {$total} </h1>";
}else{
    echo 'Numeric values required';
}
}
?>