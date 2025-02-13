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
echo $dateTime->format("Y-m-d H:i:s").PHP_EOL;

$dateLagi = DateTime::createFromFormat("Y-m-d H:i:s", "2026-11-30 19:12:12", new DateTimeZone("Asia/Jakarta"));
if($dateLagi){
    var_dump($dateLagi);
}else{
    echo "format salah".PHP_EOL;
}