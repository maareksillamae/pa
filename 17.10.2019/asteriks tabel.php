<?php

for($row = 1; $row<6; $row++)

{echo $row.'&nbsp';
    if($row <10){
        echo'&nbsp;&nbsp';
    }

       // for($col = 1;$col<=$row; $col++)
  //  for($col = 1;$col<=6-$row; $col++)
    {for($col = 1; $col <=(5-$row);$col++)
           echo'&nbsp;&nbsp;';}
    for($col = 1;$col<=$row; $col++)
        echo '*';

    for($col = 1;$col<=(2*$row-1); $col++){

        echo '*';
    echo'&nbsp';}
    echo'<br>';

}