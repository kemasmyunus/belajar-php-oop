<?php
// memanggil file Person
include "data/Char.php";

// ada dua cara untuk membuat const //nama const dibuat BESAR_SEMUA 
// menggunakan define
define("APP_NAME","MYWAIFULIST");

//menggunakna const
const APP_VERSION = "0.1";

echo APP_NAME.PHP_EOL;
echo APP_VERSION.PHP_EOL;
// mengakses const dari class
echo Char::AUTHOR.PHP_EOL;

$kousakaReina = new Char("Kousaka Reina", "Hibike Euphonium"); //membuat object emilia
$kousakaReina -> contohSelfKeyword();