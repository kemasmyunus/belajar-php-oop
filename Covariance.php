<?php
include "data/Guild.php";

$kazuma = new \Data\KazumaParty();
$kazumaparty = $kazuma->quest("kazuma");
$kazumaparty->eat(new \Data\Food());

$megumin = new \Data\MeguminParty();
$meguminparty = $megumin->quest("megumin");
$meguminparty->eat(new \Data\KazumaFood());