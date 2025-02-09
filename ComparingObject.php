<?php

class Maho{
    public string $kelas;
    public string $jurus;
    public int $damage;
}

$freiren = new Maho();
$freiren->kelas = "maho";
$freiren->jurus = "zoltrak";
$freiren->damage = "100";


$fern = new Maho();
$fern->kelas = "maho";
$fern->jurus = "zoltrak";
$fern->damage = "100";


// equals = membandingkan value dari properti
var_dump($fern == $freiren);
// identity = membandingkan apakah object sama
var_dump($fern === $freiren);
