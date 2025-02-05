<?php


class JitenshaBu{
    public string $kategori;
    public function __construct(string $kategori){
        $this->kategori = $kategori;
    }
}

class Climber extends JitenshaBu{

}

class Sprinter extends JitenshaBu{

}

class SohokuHighSchool{
    public JitenshaBu $jitenshabu;
}

function sayHelloJitenshaBu(JitenshaBu $jitenshabu){
    // kalau object kita bisa menggunakan instanceof untuk pengecekannya
    if($jitenshabu instanceof Climber){
        echo "halo semuanya, kami adalah Climber $jitenshabu->kategori".PHP_EOL;
    }elseif($jitenshabu instanceof Sprinter){
        echo "halo semuanya, kami adalah Sprinter $jitenshabu->kategori".PHP_EOL;
    }elseif($jitenshabu instanceof JitenshaBu){
        echo "halo semuanya, kami adalah $jitenshabu->kategori".PHP_EOL;
    }
}