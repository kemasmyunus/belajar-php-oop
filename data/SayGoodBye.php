<?php

namespace Data\Traits;

trait SayGoodBye{
    public function sayGoodBye(?string $name): void{
        if(is_null($name)){
            echo "good bye".PHP_EOL;
        }else{
            echo "good bye $name".PHP_EOL;
        }
    }
}

trait SayHello{
    public function hello(?string $name): void{
        if(is_null($name)){
            echo "hello".PHP_EOL;
        }else{
            echo "hello $name".PHP_EOL;
        }
    }
}

trait HasName{
    public string $name;
}

class Person{
    use SayGoodBye, SayHello, HasName;
}