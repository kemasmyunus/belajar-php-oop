<?php

include "data/Location.php";

use Data\{Location, City, Province, Country};
// ini error karena tidak bisa membuat object langsung dari sebuah abstract class
// $location = new Location();

$city = new City();
$province = new Province();
$country = new Country();
var_dump($city);