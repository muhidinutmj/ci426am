<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/helo', 'HelloController::index');
$routes->resource('students', ['controller' => 'StudentController']);
// $routes->get('/students', 'StudentController::index');
// $routes->get('/student/(:num)', 'StudentController::show/$1');
// $routes->post('/student', 'StudentController::create');
// $routes->put('/student/(:num)', 'StudentController::update/$1');
// $routes->delete('/student/(:num)', 'StudentController::delete/$1');
