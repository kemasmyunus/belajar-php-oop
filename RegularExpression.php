<?php
$matches = [];
$result = (bool)preg_match_all("/yuki|yukina|asuna/i", "yuki asuna", $matches);
var_dump($result);
var_dump($matches);

$result = preg_replace("/teme|kuso|buta/i", "***", "kono buta yarou");
var_dump($result);

$result = preg_split("/[\s,-]/", "Kousaka Reina,3-nen,Kita Uji Koukou Suisougakubu menba");
var_dump($result);
