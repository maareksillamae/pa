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



?>

<div id="container"
<form action="" method="get">
    <div id="input-group">
        <label for="nation">kodakondsus</label>
        <select id="nation" name="nation">
            <option value="et">eestlane</option>
            <option value="ru">venelane</option>
            <option value="fi">soomlane</option>
            <option value="se">rootslane</option>

        </select>
    </div>
    <div id="input-group">
        <label for="age">vanus</label>
        <input type="number" min="0" id="age" name="age">
    </div>
    <div id="input-group">
        <label for="ed"
        </label>
        <input type="radio" id="edu" name="ed" value="alg">
    <div id="input-group">
        <label for="edu">p6hikool
        </label>
   <input type="radio" id="edu" name="edu" value="basic">
        <label for="edum">keskkool
        </label>
        <input type="radio" id="edum" name="edu" value="medium">
        <label for="eduh">k6rgkool
        </label>
        <input type="radio" id="eduh" name="edu" value="high">

    </div>

    <div id="input-group">
<input type="submit" value="kontrolli">
    </div>
</form>

