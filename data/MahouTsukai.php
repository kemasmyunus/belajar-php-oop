<?php
class MahouTsukai {
    public string $name;
    public string $maho;
    public int $toshi;
    private string $coba;

    public function setCoba(string $coba){
        $this->coba = $coba;
    }
    public function __clone(){
        unset($this->coba);
    }

    public function __toString(){
        return "Mahou Tsukai wa namae wa $this->name desu, kore wa mahou wa $this->maho desu, soshite $this->toshi sai desu.";
    }

    public function __invoke(...$arguments): void{
        $join = join(",", $arguments);
        echo "Invoke student with arguments $join".PHP_EOL;
    }

    public function __debugInfo(){
        return [
            "name"=> $this->name,
            "maho"=> $this->maho,
            "toshi"=> $this->toshi,

            //disini juga bisa ditambah kalau mau
            "partner"=>"yahalo",
            "animal"=>"sakana"
        ];
    }
}