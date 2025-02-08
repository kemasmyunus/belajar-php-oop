<?php

include "helper/MathHelper.php";

use Helper\MathHelper;

echo MathHelper::$name.PHP_EOL;
MathHelper::$name = "Takina Inoue";
echo MathHelper::$name.PHP_EOL;

$result = MathHelper::sum(1,54,2,1,5,1,2,3,);
echo "result : $result".PHP_EOL;