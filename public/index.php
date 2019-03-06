<?php

use HelloWorld\SayHello;

require __DIR__ . '/../vendor/autoload.php';


$new = new \App\Wcs\Hello();
$new->talk();

echo SayHello::world();
