<?php
require 'vendor/autoload.php';

$env = new Dotenv\Dotenv(__DIR__);
$env->load();

$options = [
    PDO::ATTR_CASE => PDO::CASE_NATURAL,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_ORACLE_NULLS => PDO::NULL_NATURAL,
    PDO::ATTR_STRINGIFY_FETCHES => false,
    PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_TIMEOUT => 3,
];

$config = [
    'database_type' => 'mysql',
    'database_name' => getenv('DB_NAME'),
    'server'        => getenv('DB_HOST'),
    'username'      => getenv('DB_USER'),
    'password'      => getenv('DB_PASS'),
    'charset'       => 'utf8',
    'option'        => $options
];

$pdo = new \Medoo\Medoo($config);
$data = $pdo->select('t_card', '*');
var_dump($data);