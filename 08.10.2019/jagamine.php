<!DOCTYPE html>
<html>
<head>
    <title>$division</title>
</head>
<body>

<form>
    <div>Number 1:</div>
    <input type="number" name="num1"/>
    <div>Number 2:</div>
    <input type="number" name="num2"/>
    <div><br><input type="submit" value="CHECK THE SUM"></div><br>
</form>

<?php
 $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];


if (isset($_GET['num1']) && isset($_GET['num2']));

    $division = $num1 / $num2;
    echo $num1 . " / " . $num2 . " = " . $division;


?>

</body>
</html>