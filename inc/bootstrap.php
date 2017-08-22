<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/functions.php';
require_once __DIR__ . '/connection.php';

$dotenv = New Dotenv\Dotenv(__DIR__);
$dotenv->load();
