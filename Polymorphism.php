<?php
// sebuah properti atau data bisa berubah bentuk tipe datanya.
include "data/JitenshaBu.php";

$sohoku = new SohokuHighSchool();
$sohoku->JitenshaBu = new JitenshaBu("Saya");
var_dump($sohoku);
$sohoku->JitenshaBu = new Climber("Saya");
var_dump($sohoku);
$sohoku->JitenshaBu = new Sprinter("Saya");
var_dump($sohoku);

sayHelloJitenshaBu(new JitenshaBu("yunus"));
sayHelloJitenshaBu(new Climber("yunus"));
sayHelloJitenshaBu(new Sprinter("yunus"));