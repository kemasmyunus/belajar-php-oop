<?php

include "data/BungakuBu.php";
include "data/Hyouka.php";

use Anime\MakeHeroine\{BungakuBu as MakeHeroinBungakuBu, SeitoKaichou, Undobu};
use Anime\Hyouka\BungakuBu as HyoukaBungakuBu;
use function Hyouka\iceCream as ice;
use const Hyouka\CLUB_NAME as CLUB;

$anna = new MakeHeroinBungakuBu();
$lemon = new Undobu();
$yumeko = new SeitoKaichou();