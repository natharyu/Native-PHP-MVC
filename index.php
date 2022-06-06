<?php
session_start();
require __DIR__ . '/vendor/autoload.php';

use App\Config\Router;
use App\Controller\Home;

// HOME CONTROLLER //
Router::get('/', function () {
   (new Home())->index();
});

Router::get('/about', function (){
    (new Home())->aboutView();
});

Router::get('/contact', function (){
    (new Home())->contactForm();
});