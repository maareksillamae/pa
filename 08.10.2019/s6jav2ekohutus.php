

<?php

$nation = $_GET ['nation'];
$age = $_GET['age'];
$edu=$_GET['edu'];
if(strlen ($age)> 0){
if($nation == 'et' and $age >=18 and $edu !='alg');


else{
    echo 'tuleb sisestada k6ik andmed';
    if($nation !='et')
    {
        echo'ainult eestlased';
    }
}
if($age !='age')
{
    echo'18';
}
if($edu !='edu')
{
    echo'p6hiharidus';
}

