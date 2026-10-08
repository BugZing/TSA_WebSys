<?php

use CodeIgniter\Router\RouteCollection;

$routes->get('/', 'Home::index');
$routes->get('/tasks', 'Tasks::index');
$routes->get('/profile', 'Profile::index');
$routes->get('/about', 'About::index');


$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::processLogin');
$routes->get('/logout', 'Auth::logout');

$routes->group('', ['filter' => 'auth'], function($routes) {
    $routes->post('/tasks/store', 'Tasks::store');
    $routes->post('/tasks/update/(:num)', 'Tasks::update/$1');
    $routes->get('/tasks/delete/(:num)', 'Tasks::delete/$1');
});