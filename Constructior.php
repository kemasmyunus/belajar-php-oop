<?php
include "data/Char.php";

// construct adalah metode khusus yang dijalankan secara otomatis ketika objek dibuat dari kelas
$kumiko = new Char("Oumae Kumiko", "Hibike Euphonium");
$kumiko -> partner = "Suichi";
var_dump($kumiko);