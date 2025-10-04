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
    $routes->get('logout', 'Home::logout');
    $routes->get('anggota/input', 'Admin::input');
    $routes->post('anggota/store', 'Admin::store');
    $routes->get('anggota/details/(:segment)', 'Admin::details/$1');
    $routes->get('anggota/delete/(:segment)', 'Admin::delete/$1');
    $routes->get('anggota/edit/(:segment)', 'Admin::edit/$1');
    $routes->post('anggota/update/(:segment)', 'Admin::update/$1');
    $routes->get('komponengaji', 'KomponenGaji::index');
    $routes->get('datapenggajian', 'Penggajian::index');
    $routes->get('gaji/input', 'KomponenGaji::input');
    $routes->post('gaji/store', 'KomponenGaji::store');
    $routes->get('gaji/details/(:segment)', 'KomponenGaji::details/$1');
    $routes->get('gaji/edit/(:segment)', 'KomponenGaji::edit/$1');
    $routes->post('gaji/update/(:segment)', 'KomponenGaji::update/$1');
    $routes->get('gaji/delete/(:segment)', 'KomponenGaji::delete/$1');
    $routes->get('penggajian/ambil/(:segment)', 'Penggajian::input/$1');
    $routes->post('penggajian/save', 'Penggajian::save');
    $routes->get('penggajian/details/(:segment)', 'Penggajian::details/$1');
    $routes->get('penggajian/edit/(:segment)', 'Penggajian::edit/$1');
    $routes->post('penggajian/update/(:segment)', 'Penggajian::update/$1');
    $routes->get('penggajian/delete/(:segment)', 'Penggajian::delete/$1');
});

$routes->group('user', ['filter' => 'auth'], function($routes) {
    $routes->get('/', 'User::dashboard');
});