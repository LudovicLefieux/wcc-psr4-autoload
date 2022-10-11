<?php

require '../vendor/autoload.php';

use App\Hello;

$test = new Hello();

echo $test->talk();