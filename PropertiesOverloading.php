<?php

Class Zero{
    private array $properties = [];
    public function __get($name){
        return "halo $this->properties[$name]";
    }

    public function __set($name, $value){
        echo "coba saja dulu {$name}nya, $value";
    }

    public function __isset($name){
        echo "isset";
        return false;
    }

    public function __unset($name){
        echo "unset";
    }
}

$zero = new Zero();
$yaya = $zero->kita="raka";
$ye = $zero->haha="kaka";

echo $yaya.$ye.PHP_EOL;