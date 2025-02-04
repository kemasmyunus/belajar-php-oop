<?php

include "data/Buchou.php";

$kumiko = new Buchou();
$kumiko->nama = "Oumae Kumiko";
$kumiko->kelas = "3a";
echo $kumiko->sayHello("kanade chan");

$suichi = new Fukubuhcou();
$suichi->nama = "Tsukamoto Suichi";
$suichi->kelas = "3c";
echo $suichi->sayHello("kanade chan");
echo $suichi->sayHelloBuchou("kanade chan");

