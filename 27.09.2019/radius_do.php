<?php
//radius_ do .php
//defineerime muutuja raadius ja omistame v22rtuse mida susestad kasutajada

$raadius = $_GET['raadius'];
//v'ljastame saadud v22rtuse ekraanil
echo 'sisetuatud raadius on'.$raadius.'<br>';
//arvutused
//ringi pindala
$ringiPindala = pi() * $raadius * $raadius;
//ringi ymberm66t
$ringiUmbermoot = pi() * 2*$raadius;
//muutujate andmete tyybi ja v22rtuste kontroll
/*var_dump($ringiPindala);
var_dump($ringiUmbermoot);*/
//v2ljasta tulemused
$ringiPindalaummardatud = round($ringiPindala, 3);
echo 'ringi pindala on '.$ringiPindalaummardatud.'<br>';
echo 'ringi umbermoot on '.round($ringiUmbermoot, 3).'<br>';
