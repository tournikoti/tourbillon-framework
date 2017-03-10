<?php

require '../vendor/autoload.php';

require_once __DIR__ . '/../app/Application.php';

$app = new Application();

$app->setConfiguration(realpath('../app/config/config.neon'));
$app->setMode('DEV');

$app->run();
