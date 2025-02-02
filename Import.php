<?php

include "data/BungakuBu.php";
include "data/Hyouka.php";

// use keyword //agar tidak perlu lagi menyebut nama namespacenya di awal.
// jika nama class sama, maka akan error walaupun namespacenya beda
use Anime\MakeHeroine\BungakuBu;
use function Hyouka\iceCream;
use const Hyouka\CLUB_NAME;

$anna = new BungakuBu();
// kalau perlu memanggil kelas yang sama, maka salah satu harus menyebut namespace
$chitanda = new Anime\Hyouka\BungakuBu();

iceCream();
echo CLUB_NAME.PHP_EOL;