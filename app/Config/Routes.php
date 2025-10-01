<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/login', 'Login::index');
$routes->post('/login/auth', 'Login::auth');
$routes->get('/logout', 'Login::logout');

$routes->group('admin', ['filter' => 'auth'], function($routes) {
    $routes->get('/', 'Admin::dashboard');
    $routes->get('/logout', 'Home::logout');
});

$routes->group('user', ['filter' => 'auth'], function($routes) {
    $routes->get('/', 'User::dashboard');
});