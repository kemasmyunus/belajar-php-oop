<?php

include "data/Anime.php";

$konosuba = new Anime("Konosuba",200);
echo $konosuba-> getName().PHP_EOL;
echo $konosuba-> getBudget().PHP_EOL;

$KonoSubaBakuenwo = new AnimeSpinOff("KonoSubaBakuenwo",50);
echo $KonoSubaBakuenwo->info().PHP_EOL;