<?php

require_once 'vendor/autoload.php';

//The router class is the main entry point for interaction.
$router = new HSPDev\HuaweiApi\Router();

//If specified without http or https, assumes http://
$router->setAddress('192.168.0.1');

//Username and password.
//Username is always admin as far as I can tell.
$router->login('admin', 'admin');

$tel_number = $_GET['tel_number'];
$message = $_GET['message'];
$router->sendSms($tel_number, $message);
