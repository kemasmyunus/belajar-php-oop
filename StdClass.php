<?php

$array = [
    "vocalist" => "Minato Yukina",
    "trumpet" => "Kousaka Reina",
    "shooter" => "Takina Inoue"
];
// stdClass sangat berguna jika kita ingin melakukan konversi dari array ke object secara otomatis
$object = (object)$array;

var_dump($object);

echo $object->vocalist.PHP_EOL;
echo $object->trumpet.PHP_EOL;
echo $object->shooter.PHP_EOL;

$arrayLagi = (array)$object;
var_dump($arrayLagi);

include "data/Char.php";

$char = new Char("Kumiko", "Kyoto");
var_dump($char);

$charArray = (array)$char;
var_dump($charArray);
