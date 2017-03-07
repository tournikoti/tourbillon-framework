<?php

use Tourbillon\Tourbillon;

require '../vendor/autoload.php';

$app = new Tourbillon();

$app->setConfiguration(realpath('../app/config/config.neon'));
$app->setMode('DEV');

$app->run();
