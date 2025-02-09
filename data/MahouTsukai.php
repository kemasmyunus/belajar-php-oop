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
}