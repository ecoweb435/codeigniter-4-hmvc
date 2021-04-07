<?php 


$routes->group('/', ['namespace' => 'Modules\AdminController\Controllers'], function($routes){
    $routes->get('/admin-data-controller', 'Data_controller::index');
    $routes->get('/admin-data-controller/tambah', 'Data_controller::form_tambah_controller');
    $routes->get('/admin-data-controller/edit/(:any)', 'Data_controller::form_edit_controller');
    $routes->post('/admin-data-controller/save', 'Data_controller::save_controller');
});
