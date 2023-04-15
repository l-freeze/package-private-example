<?php
require 'vendor/autoload.php';

use Src\SpaceA\Caller as CallerA;
use Src\SpaceB\Caller as CallerB;

//Callable example
$callerA = new CallerA();
$callerA->do();

echo PHP_EOL;

//Not Callable example
$callerB = new CallerB();
$callerB->do();



