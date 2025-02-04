<?php

include "data/Buchou.php";

$kumiko = new Buchou();
$suichi = new Fukubuhcou();

$kumiko->nama = "Oumae Kumiko";
$kumiko->kelas = "3";

$suichi->nama = "Tsukamoto Suichi";
$suichi->kelas = "3";

$kumiko->sayHello("kanade chan");
$suichi->sayHello("kanade chan");