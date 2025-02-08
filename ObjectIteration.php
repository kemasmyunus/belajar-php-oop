<?php

class Data implements IteratorAggregate{
    var string $first = "First";
    public string $second = "Second";
    private string $third = "Third";
    protected string $fourth = "Fourth";

    public function getIterator(){
        /**
        *  $array = [
        *     "first" => $this->first,
        *     //jika kita tidak ingin mengeluarkan data seperti password misal, maka kita bisa tidak tuliskan di iteratornya
        *     "second" => $this->second,
        *     "third" => $this->third,
        *     "fourth" => $this->fourth,
        * ];
        * return new ArrayIterator($array);
        */

        // ini adalah contoh menggunakan kata kunci yield
        yield "first" => $this->first;
        yield "second" => $this->second;
        yield "third" => $this->third;
        yield "fourth" => $this->fourth;
    }
}

$data = new Data();
// selain foreach bisa digunakan untuk melakukan iterasi dari array
// foreach juga bisa digunakan untuk melakukan iterasi dari object
foreach($data as $key => $value){
    echo "$key : $value".PHP_EOL;
}