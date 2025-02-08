<?php
include "data/MahouTsukai.php";
$freiren = new MahouTsukai();
$freiren->name = "freiren";
$freiren->maho = "zoltorak";
$freiren->toshi = 100000;
$freiren->setCoba("ini dari variable private");
var_dump($freiren);

$freirenKuvaaru = clone $freiren;
var_dump($freirenKuvaaru);
