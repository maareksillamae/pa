<?php
$nimi = $_GET['nimi'];
$pikkus = $_GET['pikkus'];
$kaal = $_GET['kaal'];

echo 'nimi:'.$nimi. '<br>';
echo 'pikkus:'.$pikkus. '<br>';
echo 'kaal:'.$kaal. '<br>';
$kmi = $kaal / ($pikkus * $pikkus );
echo'<hr>';
echo '<a href="input.php">sisesta andmed uuesti</a>';