<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/login', 'Login::index', ['as' => 'login']);
$routes->post('/login', 'Login::store', ['as' => 'login.store']);
$routes->get('/login/sair', 'Login::logout', ['as' => 'login.logout']);

$routes->get('/register', 'Login::register', ['as' => 'register']);
$routes->post('/register', 'Login::registerStore', ['as' => 'register.store']);

$routes->get('/dashboard', 'Dashboard::index', ['as' => 'dashboard']);

$routes->get('/tabela/produtos', 'Produto::readProduct', ['as' => 'tabela.produtos']);

$routes->get('/adicionar/produtos', 'Produto::showForms', ['as' => 'adicionar.produtos']);
$routes->post('/adicionar/produtos', 'Produto::addProduct', ['as' => 'adicionar.produtos.acao']);
