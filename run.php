<?php
require 'vendor/autoload.php';

$env = new Dotenv\Dotenv(__DIR__);
$env->load();
var_dump($_ENV['APP_NAME']);
var_dump(getenv('APP_NAME'));

$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('log/app.log', Monolog\Logger::WARNING));
$result = $log->addRecord(Monolog\Logger::WARNING, 'Foo', ['a' => 1]);
var_dump($result);