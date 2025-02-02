<?php

class Char{
    // mendefinisikan const didalam class
    const AUTHOR = "Kemas M. Yunus";
    // membuat atribut atau properties harus menggunakan var
    var string $name;
    var ?string $anime; // nullable type : tanda tanya menandakan bahwa properties boleh null
    var string $partner = "tidak ada"; // properties default value : adalah nilai default jika data partner tidak diset dalam object


    //membuat construct
    // construct adalah metode khusus yang dijalankan secara otomatis ketika objek dibuat dari kelas
    function __construct(string $name, ?string $anime){
        $this->name = $name;
        $this->anime = $anime;
    }

    function __destruct(){
        echo "Object Char {$this->name} is destroyed".PHP_EOL;
    }

    //menambahkan function ke dalam class :
    function detailCharacter(string $name, string $anime, string $partner) {
        echo "nama character adalah $name, dari anime $anime, dia memiliki partner bernama $partner".PHP_EOL;
    }
    function detailCharacterValue(string $name, string $anime, string $partner):string {
        return "nama character adalah $name, dari anime $anime, dia memiliki partner bernama $partner".PHP_EOL;
    }

    function sayHello(?string $nama){
        if(is_null($nama)){
            // menggunakan this keyword, untuk mengakses fungsi yang sedang berjalan
            echo "halo, my name is $this->name".PHP_EOL;
        }else{
            echo "halo $nama, my name is $this->name".PHP_EOL;
        }
    }

    //menggunakan self keyword
    //untuk memanggil const didalam class yang sama
    function contohSelfKeyword(){
        echo "author dari code ini adalah ".self::AUTHOR.PHP_EOL;
    }
}