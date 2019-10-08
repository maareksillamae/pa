<?php

$temp = -25;
$background='';

echo '<br>';

if($temp>0){
    $background = 'bg-cold';
}else if($temp<0){
    $background = 'bg-warm';
}
if ($temp=0){
    $background = 'bg-normal';
}

echo'
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>
';

