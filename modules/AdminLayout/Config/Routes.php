<?php 

//$routes->get('/homee', 'Modules\FrontEndHome\Controllers\Home::index');

$routes->group('/', ['namespace' => 'Modules\AdminLayout\Controllers'], function($routes){
    $routes->get('/admin', 'Layout::index');
});
