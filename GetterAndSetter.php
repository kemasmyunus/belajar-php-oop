<?php

include "data/Category.php";

$category = new Category();
$category->setName("Euphonium");
$category->setExpensive(true);

echo "Name : {$category->getName()}". PHP_EOL;
echo "Expensive : {$category->isExpensive()}". PHP_EOL;