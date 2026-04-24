<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/helo', 'HelloController::index');
$routes->resource('students', ['controller' => 'StudentController']);
