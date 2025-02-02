<?php

class Buchou{
    var string $nama;
    var string $kelas;

    // void untuk menandakan bahwa suatu function tidak mengembalikan nilai
    function sayHello(string $name): void {
        // $name mengambil nilai yang dimasukkan di function
        // $this->nama mengambil nilai dari properties diatas
        echo "Konnichiwa, minna-san! Watashi no namae wa {$this->nama} desu, kelas {$this->kelas} desu. Yoroshiku onegaishimasu, {$name}.\n";
    }
    
}

class Fukubuhcou extends Buchou{
    
}