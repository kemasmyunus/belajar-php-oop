<?php

trait MinatoYukina {
    function sayA(): void {
        echo "Minna, iku wa yo!".PHP_EOL;
    }

    function sayB(): void {
        echo "Moeagare!".PHP_EOL;
    }
}

trait KousakaReina {
    function sayA(): void {
        echo "Tokubetsu ni naritai!".PHP_EOL;
    }
    function sayB(): void {
        echo "Kinshou torimashou!".PHP_EOL;
    }
}


class Sample{
    use KousakaReina, MinatoYukina{
        MinatoYukina::sayA insteadof KousakaReina;
        KousakaReina::sayB insteadof MinatoYukina;
    }
}

$sample = new Sample();
$sample->sayA();
$sample->sayB();