<?php

include "data/BungakuBu.php";
include "data/Hyouka.php";

// alias
// alias akan berguna jika ada class yang memiliki nama yang sama
use Anime\MakeHeroine\BungakuBu as MakeHeroinBungakuBu;
use Anime\Hyouka\BungakuBu as HyoukaBungakuBu;
use function Hyouka\iceCream as ice;
use const Hyouka\CLUB_NAME as CLUB;

$anna = new MakeHeroinBungakuBu();
// kalau perlu memanggil kelas yang sama, maka salah satu harus menyebut namespace
$chitanda = new HyoukaBungakuBu();

ice();
echo CLUB.PHP_EOL;