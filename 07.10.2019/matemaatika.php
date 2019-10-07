<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-s
          cale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
body{
    font-family: Tahoma;
}
        table , th, td{
            border : solid 1px #333;
            border-collapse: collapse;
        }
        td, th{
            text-align: center;
            padding: 0.25rem;
        }
        thead{
            background: aquamarine;
        }
        tr:nth-child(even){
            background: aqua;
        }
    </style>
    <title>Aritmeetilised operaatorid</title>
</head>
<body>


<?php

$x=8;
$y=2;

$sum = $x  + $y;

$diff = $x - $y;
$product = $x * $y;
$division = $x/$y;
$residual = $x % $y;

echo '
<table>
    <thead>
    <tr>
       <th>
           operator
       </th>
        <th>
            nimetus
        </th>
        <th>
            naide
        </th>
        <th>
            tulemus
        </th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>x+y</td>
        <td>liitmine</td>
        <td>'.$x.'+'.$y.'</td>
        <td>'.$sum.'</td>
    </tr>
       <tr>
        <td>x-y</td>
        <td>lahutamine</td>
        <td>'.$x.'-'.$y.'</td>
        <td>'.$diff.'</td>
    </tr>
       <tr>
        <td>x*y</td>
        <td>korrutamine</td>
        <td>'.$x.'*'.$y.'</td>
        <td>'.$product.'</td>
    </tr>
       <tr>
        <td>x/y</td>
        <td>jagamine</td>
        <td>'.$x.'/'.$y.'</td>
        <td>'.$division.'</td>
    </tr>
     <tr>
        <td>x%y</td>
        <td>j22k</td>
        <td>'.$x.'%'.$y.'</td>
        <td>'.$residual.'<br>'.(5 % 2).' </td>
    </tr>
    
    </tbody>
</table>';

?>
</body>
</html>