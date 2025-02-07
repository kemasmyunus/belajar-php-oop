<?php

include "data/SayGoodBye.php";

use Data\Traits\{Person, SayHello, SayGoodBye};

$person = new Person();
$person->sayGoodBye("reina");
$person->hello("kumiko");
$person->name = "kanade";
var_dump($person);

$person->run();