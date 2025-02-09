<?php

include "data/MahouTsukai.php";

$freiren = new MahouTsukai();
$freiren->name = "freiren";
$freiren->maho = "zoltorak";
$freiren->toshi = 100000;

$string = (string) $freiren;
echo $string.PHP_EOL;

// bisa juga seperti ini 
echo $freiren.PHP_EOL;
