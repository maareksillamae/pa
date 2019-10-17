<?php
$sum = 0;
for ($numer=1; $number
    <=20;$number++)
if($number<2){
    echo'antud arv ei kuulu valitud vahemiku sisse<br>';
}
else{
    $divider = 2;
    while($number % $divider !=0) {
        $divider++;

    }
    if ($number == $divider){
        echo $number.' on algarv<br>';
        $sum = $sum+$number;

    }
    else{
        echo $number. 'ei ole alg arv<br>';
    }
}
echo '<hr>';
echo 'antud summa on '.$sum;