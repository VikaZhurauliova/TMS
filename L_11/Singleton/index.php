<?php
require_once "Config.php";

$instance = Config::getInstance();

$login = 'VikaZhurauliova';
$name = 'Vika';
$city = 'Minsk';

$instance -> setKey('name', $name);
$instance -> setKey('city', $city);
$instance -> setKey('login', $login);

$instance1 = Config::getInstance();

$instance = Config::getInstance();
$instance1 = Config::getInstance();
print_r($instance === $instance1);

