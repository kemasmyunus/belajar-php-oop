<?php

require_once "data/Char.php";

$emilia = new Char();
$emilia->name = "Emilia";
$emilia->anime = "Re:Zero - Starting Life in Another World";
$emilia->partner = "Puck (Roh)";

$elaina = new Char();
$elaina->name = "Elaina";
$elaina->anime = "Majo no Tabitabi (The Journey of Elaina)";
$elaina->partner = "Amnesia";

// Menampilkan semua data dari objek
echo "Nama: {$emilia->name}, Anime: {$emilia->anime}, Partner: {$emilia->partner}.\n";
echo "Nama: {$elaina->name}, Anime: {$elaina->anime}, Partner: {$elaina->partner}.\n";
