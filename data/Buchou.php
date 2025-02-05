<?php

class Buchou{
    var string $nama;
    var string $kelas;
    var string $title;
    // void untuk menandakan bahwa suatu function tidak mengembalikan nilai
    function sayHello(string $name): string {
        // $name mengambil nilai yang dimasukkan di function
        // $this->nama mengambil nilai dari properties diatas
        $kalimat = "Konnichiwa, minna-san! Watashi no namae wa {$this->nama} desu, watashiwa adalah buchou di koko desu, watashi kelas {$this->kelas} desu. Yoroshiku onegaishimasu, {$name}.\n";
        return $kalimat;
    }
    public function __construct(string $name = "", string $title = "buchou"){
        $this->tittile = $title;
        $this->name = $name;
    }
}

class Fukubuhcou extends Buchou{
    // function overriding
    // jadi kita bisa mendeklarasikan ulang function yang ada di parent classnya
    // jika kita membuat function di child class dengan nama yang sama yang ada di parent classnya, maka akan terjadi overriding
    // artinya function disini akan ditimpa, dan yang dijalankan didalam child class ini adalah function yang baru 
    function sayHello(string $name): string {
        // $name mengambil nilai yang dimasukkan di function
        // $this->nama mengambil nilai dari properties diatas
        $kalimat = "Konnichiwa, minna-san! Watashi no namae wa {$this->nama} desu, watashiwa adalah fuku buchou di koko desu, watashi kelas {$this->kelas} desu. Yoroshiku onegaishimasu, {$name}.\n";
        return $kalimat;
    }

    //parent keyword
    // digunakan untuk mengakses yang ada di kelas parentnya, jadi kita bisa tetap menggunakan function sayHello dari parent class walaupun sudah di overriding
    function sayHelloBuchou(string $name){
        return parent::sayHello($name);
    }
    
    public function __construct(string $name =""){
        // tidak wajib, tapi direkomendasikan memanggil constructor di class parent
        // agar code yang dieksekusi pada construct parent juga bisa dieksekusi di class child
        parent::__construct($name, "Fuku Buchou");
    }
}