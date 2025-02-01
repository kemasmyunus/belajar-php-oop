<?php

require_once "data/Char.php";

$emilia = new Char(); //membuat object emilia
$emilia->name = "emilia";

$elaina = new Char(); //membuat object elaina
$elaina->name = "elaina";

// mengakses function yang mengembalikan value didalam object
$detailChar = $emilia->detailCharacterValue("Elaina", "Majo no Tabitabi (The Journey of Elaina)", "Amnesia");
echo "$detailChar";

// mengakses function didalam object
$emilia -> detailCharacter("Emilia", "Re:Zero - Starting Life in Another World", "Puck (Roh)");

// function yang ada thisnya
$elaina -> sayHello("rika");
// function yang ada thisnya
$emilia -> sayHello(null);