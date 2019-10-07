

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
echo '
<table>
    <thead>
    <tr>
       <th>
           operator
       </th>
        <th>
            lyhend
        </th> 
     
 
        <th>
            tulemus
        </th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>x+2</td>
        <td>+=2</td>
            <td>'.($x+=2).'</td>
        
    </tr>';
    $x=8;
echo'
       <tr>
        <td>x-y</td>
        <td>-=2</td>
      
        <td>'.($x-=2).'</td>
    </tr>';
    $x=8;
echo'
       <tr>
        <td>x*</td>
        <td>*=2</td>
         <td>'.($x*=2).'</td>
    </tr>
       <tr>
        <td>x/</td>
        <td>/=2</td>
    
            <td>'.($x/=2).'</td>
    </tr>';
      $x=8;
echo'
      
     <tr>
        <td>x%</td>
        <td>%=2</td>

                 <td>'.($x%=2).'</td>
    </tr>
    
    </tbody>
</table>';

?>
</body>
</html>