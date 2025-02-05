<?php

include "data/Buchou.php";

$kumiko = new Buchou();
$suichi = new Fukubuhcou();

$kumiko->nama = "Oumae Kumiko";
$kumiko->kelas = "3";

$suichi->nama = "Tsukamoto Suichi";
$suichi->kelas = "3";

echo $kumiko->sayHello("kanade chan");
echo $suichi->sayHello("kanade chan");