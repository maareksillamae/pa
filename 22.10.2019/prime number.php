<?php

//define funktsion
function isPrimeNumber($number)
{
   // $result=''
    if($number<2){
        echo $number.'antud arv ei kuulu valitud vahemiku sisse<br>';
    }
    else{
        $divider = 2;
        while($number % $divider !=0) {
            $divider++;

        }
        if ($number == $divider){
            $result = true;
        }
        else{
            $result = false;
        }
    }

    return $result;
}
function isprimenumberdescription($number ,$isprime) {
    if($isprime){
        echo $number.'ta on algarv';
    }
    else{
        echo $number. 'ei ole algarv';
    }
}
$number= rand(1,10);
//use function
isprimenumberdescription($number, isPrimeNumber($number));