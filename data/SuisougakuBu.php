<?php

class SuisougakuBu{
    public string $name;
}
// final class artinya class Euphonium tidak bisa lagi diwariskan
class LowBrass extends SuisougakuBu{
    // final function artinya tidak bisa meng override function ini di class turunannya
    final public function renshu(string $nama, string $tempat): bool{
        return true;
    }
}

final class Euphonium extends LowBrass{
    // error karena memaksa override final function
    /** 
    * public function renshu(string $nama, string $tempat): bool{
    *   return false;
    * }
    */
}

// error karena memaksa mewarisi final class
/**
 * class OumaeKumiko extends Euphonium{
 * 
 * }
 */

