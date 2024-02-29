<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/users/add', 'UserController::addUser');
$routes->get('/storeUser', 'UserController::addUser');