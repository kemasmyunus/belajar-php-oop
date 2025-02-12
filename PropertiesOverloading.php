<?php

Class Zero{
    private array $properties = [];
    // get untuk mengambil data berdasarkan properties namenye
    public function __get($name){
        return $this->properties[$name];
    }

    // set untuk merubah data berdasarkan properties namenya
    public function __set($name, $value){
        $this->properties[$name] = $value;
    }

    // isset untuk mengecek apakah sudah diset berdasarkan properties namenya
    public function __isset($name){
        return isset($this->properties[$name]);
    }

    // unset untuk meng unset berdasarkan properties name
    public function __unset($name){
        unset($this->properties[$name]);
    }

    public function __call($name, $arguments){
        $join = join(",", $arguments);
        echo "call function $name with argument $join".PHP_EOL;
    }

    public static function __callStatic($name, $arguments){
        $join = join(",", $arguments);
        echo "call static function $name with argument $join".PHP_EOL;
    }
}


$zero = new Zero();
$zero->firstName = "kousaka";
$zero->lastName = "reina";

echo "Fist Name = $zero->firstName".PHP_EOL;

echo "Last Name = $zero->lastName".PHP_EOL;

$zero->mahou("kita", "ragu");
Zero::mahou("kita", "ragu");
