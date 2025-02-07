<?php

namespace Data;

interface HasBrand{
    function getBrand(): string;
}

interface IsMaintenance{
    function isMaintenance(): bool;
}

interface Car extends HasBrand{
    function drive():void;

    function getTired():int;
}
// turunan interface juga bisa melakukan pholimorphism
// bisa mengimplements lebih dari 1 interface
class Avanza implements Car, isMaintenance{
    public function drive(): void{
        echo "Drive Avanza".PHP_EOL;
    }

    public function getTired(): int{
        return 4;
    }

    public function getBrand(): string{
        return "Toyota";
    }

    public function isMaintenance(): bool{
        return false;
    }
}