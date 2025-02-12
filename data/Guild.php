<?php
namespace Data;
include "AkuWizado.php";

interface Guild{
    function quest(string $name): AkuWizado;
}

class KazumaParty implements Guild{
    function quest(string $name): Kazuma{
        $kazuma = new kazuma();
        $kazuma->name = $name;
        return $kazuma;
    }
}

class MeguminParty implements Guild{
    function quest(string $name): Megumin{
        $megumin = new megumin();
        $megumin->name = $name;
        return $megumin;
    }
}