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
}