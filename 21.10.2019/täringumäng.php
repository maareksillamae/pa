<!doctype html>
<?php
$color1="white";
$color2="white";
$color3="white";
$color4="white";
$color5="white";
$color6="white";
if(isset($_POST['submit']))
{
    $roll = rand(1,6);
    //echo "You have rolled ".$roll;
    if($roll==1) {
        $color1="red";
    }
    elseif($roll==2)
    {
        $color2="red";
    }
    elseif($roll==3)
    {
        $color3="red";
    }
    elseif($roll==4)
    {
        $color4="red";
    }
    elseif($roll==5)
    {
        $color5="red";
    }
    else
    {
        $color6="red";
    }

}
?>
<div id="game">
    <h4>Visuaalne täringumäng phps</h4>
    <table border="1" >
        <tr>
            <td style="padding:15px;background-color:<?php echo $color1; ?>;">1</td>
            <td style="padding:15px; background-color:<?php echo $color2; ?>;">2</td>
            <td style="padding:15px; background-color:<?php echo $color3; ?>;">3</td>

        </tr>
        <tr>
            <td style="padding:15px; background-color:<?php echo $color4; ?>;">4</td>
            <td style="padding:15px; background-color:<?php echo $color5; ?>;">5</td>
            <td style="padding:15px; background-color:<?php echo $color6; ?>;">6</td>

        </tr>

    </table><br/>
    <form method="POST" action="<?php $_PHP_SELF; ?>">
        <input type="submit" name="submit" value="Roll A Dice" style="padding:10px;">
    </form>


</div>