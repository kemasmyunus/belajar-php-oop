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
    echo "halo semuanya, kami adalah $jitenshabu->kategori".PHP_EOL;
}