<?php
//radius_ do .php
//defineerime muutuja raadius ja omistame v22rtuse mida susestad kasutajada

$raadius = $_GET['raadius'];
//v'ljastame saadud v22rtuse ekraanil
echo 'sisetuatud raadius on'.$raadius.'<br>';
//arvutused
//ringi pindala
$ringiPindala = 3.14 * $raadius * $raadius;
//ringi ymberm66t
$ringiUmbermoot = 3.14 * 2*$raadius;
//muutujate andmete tyybi ja v22rtuste kontroll
/*var_dump($ringiPindala);
var_dump($ringiUmbermoot);*/
//v2ljasta tulemused
echo 'ringi pindala on '.$ringiPindala.'<br>';
echo 'ringi umbermoot on '.$ringiUmbermoot.'<br>';
