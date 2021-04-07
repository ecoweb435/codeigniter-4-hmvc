<?php 

//$routes->get('/homee', 'Modules\FrontEndHome\Controllers\Home::index');

$routes->group('/', ['namespace' => 'Modules\FrontEndLayout\Controllers'], function($routes){
    $routes->get('/', 'Layout::index');
});