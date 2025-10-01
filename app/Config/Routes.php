<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/login', 'Login::index');
$routes->post('/login/auth', 'Login::auth');
$routes->get('/logout', 'Login::logout');

$routes->group('admin', ['filter' => 'auth'], function($routes) {
    $routes->get('/', 'Admin::index');
    $routes->get('/logout', 'Home::logout');
    $routes->get('anggota/delete/(:segment)', 'Admin::delete/$1');
    $routes->get('admin/anggota/details/(:segment)', 'Admin::details/$1');
    $routes->get('anggota/edit/(:segment)', 'Admin::edit/$1');
});

$routes->group('user', ['filter' => 'auth'], function($routes) {
    $routes->get('/', 'User::dashboard');
});