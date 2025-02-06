<?php
//encapsulation
class Category{
    private string $name;
    private bool $expensive;
    //setter dan getter
    public function getName(): string{
        return $this->$name;
    }

    public function setName(string $name): void{
        $this->name = $name;
    }

    public function getExpensive(): bool{
        return $this->expensive;
    }

    public function setExpensive(bool $expensive): voic{
        $this->expensive = $expensive;
    }
}