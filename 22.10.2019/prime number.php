<?php

//define funktsion
function isPrimeNumber($number)
{

   // $result=''
    if($number<2){
        $result = $number.'antud arv ei kuulu valitud vahemiku sisse<br>';
    }
    else{
        $divider = 2;
        while($number % $divider !=0) {
            $divider++;

        }
        if ($number == $divider){
            $result = $number.' on algarv<br>';
            $sum = $sum+$number;

        }
        else{
            $result = $number. 'ei ole alg arv<br>';
        }
    }

    return $result;
}
//use function
isPrimeNumber(rand(0,1000));