<?php
// jika kita tidak membuat namespace didalam file php, maka secara default dia akan masuk kedalam Global Namespace
include "data/BungakuBu.php";
include "data/Hyouka.php";

$nukumizuKazuhiko = new Anime\MakeHeroine\BungakuBu();
$orekiHoutarou = new Anime\Hyouka\BungakuBu();

var_dump($nukumizuKazuhiko);
var_dump($orekiHoutarou);

echo Hyouka\CLUB_NAME.PHP_EOL;
Hyouka\iceCream();