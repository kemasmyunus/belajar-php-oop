<?php
// ini adalah bagian contoh untuk visibility
// jika tidak didefinisikan visibilitynya maka defaultnya adalah public, artinya bisa diakses dari mana saja
// protected, artinya hanya bisa diakses didalam class dan turunannya
// private, artinya hanya bisa diakses didalam class
class Anime{
    protected string $name;
    protected int $budget;

    public function __construct(string $name, int $budget){
        $this -> name = $name;
        $this -> budget =  $budget;
    }

    public function getName():string{
        return $this -> name;
    }

    public function getBudget():int{
        return $this -> budget;
    }
}

class AnimeSpinOff extends Anime{
    public function info(){
        echo "name = ".$this->name.PHP_EOL;
        echo "budget = ".$this->budget.PHP_EOL;
    }
}