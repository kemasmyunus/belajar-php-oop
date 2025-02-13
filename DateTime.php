<?php

$dateTime = new DateTime();
$dateTime->setDate(2025,12,30);
$dateTime->setTime(12,12,12);
$dateTime->add(new DateInterval("P1Y"));

$minusOneMonth = new DateInterval("P1M");
$minusOneMonth->invert = true;
$dateTime->add($minusOneMonth);

$dateTime->setTimezone(new DateTimeZone("Asia/Jakarta"));
var_dump($dateTime);