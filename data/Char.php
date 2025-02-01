<?php

class Char{
    // membuat atribut atau properties harus menggunakan var
    var string $name;
    var ?string $anime; // nullable type : tanda tanya menandakan bahwa properties boleh null
    var string $partner = "tidak ada"; // properties default value : adalah nilai default jika data partner tidak diset dalam object

    //menambahkan function ke dalam class :
    function detailCharacter(string $name, string $anime, string $partner) {
        echo "nama character adalah $name, dari anime $anime, dia memiliki partner bernama $partner".PHP_EOL;
    }
    function detailCharacterValue(string $name, string $anime, string $partner):string {
        return "nama character adalah $name, dari anime $anime, dia memiliki partner bernama $partner".PHP_EOL;
    }

    function sayHello(?string $nama){
        if(is_null($nama)){
            echo "halo, my name is $this->name".PHP_EOL;
        }else{
            echo "halo $nama, my name is $this->name".PHP_EOL;
        }
    }
}