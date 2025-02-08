<?php

namespace Data\Traits;

trait SayGoodBye{
    public function goodBye(?string $name): void{
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

trait CanRun{
    public abstract function run(): void;
}

class ParentPerson{
    public function goodBye(?string $name):void{
        echo "Good bye in person".PHP_EOL;
    }
    public function hello(?string $name):void{
        echo "Hello person".PHP_EOL;
    }
}
/** Trait Overriding
 * function yang ada di ParentClass
 * bisa di override oleh
 * function yang ada di Trait
 * bisa di override oleh
 * function yang ada di ChlildClass
 * 
 */

 trait All{
    //trait visibility override
    //kita bisa mengatur visibility function yang ada di dalam trait
    use SayGoodBye, SayHello, HasName, CanRun{
        //contoh
        /**
         * hello as private;
         * goodBye as private;  
         *  */ 
        
    }
 }
class Person extends ParentPerson{
    use All;

    public function run():void{
        echo "Person {$this->name} is running".PHP_EOL;
    }

}