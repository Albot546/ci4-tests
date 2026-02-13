<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/home', 'redirect::index');

$routes->get('/berita', function(){
    return view('berita');
});

$routes->get('/berita/detail', 'redirect::detail');

$routes->get('/', 'redirect::welcome');

$routes->get('/create', 'redirect::create');

$routes->get('/data', 'redirect::data');

$routes->get('/food', 'Food::index');

$routes->get('/test', 'redirect::test');

$routes->post('/data', 'food::inputData');