<?php

namespace Data;
include "Food.php";
abstract class AkuWizado{
    public string $name;
    // abstract function adalah fungsi yang harus di override di childclass dari abstract class
    // abstract function tidak memiliki body
    // abstract function hanya bisa dibuat di abstract class
    abstract public function maho(): void;

    abstract public function eat(KazumaFood $kazumafood): void;
}

class Megumin extends AkuWizado{
    public function maho(): void{
        echo "WAGANAWA $this->name, EKSEPLOOOOOSIOOONNNN!!!!".PHP_EOL;
    }

    public function eat(KazumaFood $kazumafood): void{
        echo "Megumin is eating".PHP_EOL;
    }
}

class Kazuma extends AkuWizado{
    public function maho(): void{
        echo "$this->name desu, KURIETO WATEEEERRRRRR!!!!".PHP_EOL;
    }

    public function eat(Food $kazumafood):void{
        echo "Kazuma is eating".PHP_EOL;
    }
}