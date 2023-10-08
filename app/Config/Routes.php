<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/login', 'Login::index', ['as' => 'login']);
$routes->post('/login', 'Login::store', ['as' => 'login.store']);
$routes->get('/login/sair', 'Login::logout', ['as' => 'login.logout']);

$routes->get('/dashboard', 'Dashboard::index', ['as' => 'dashboard']);

$routes->get('/tabela/produtos', 'Produto::index', ['as' => 'tabela.produtos']);
