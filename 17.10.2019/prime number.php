<?php
$numer=101;
if($number<5){
    echo'antud arv ei kuulu valitud vahemiku sisse';
}
else{
    $divider = 2;
    while($number %$divider !=0) {
        $divider++;

    }
    if ($number == $divider){
        echo $number.' on algarv<br>';
    }
    else{
        echo $number. 'ei ole alg arv<br>';
    }
}