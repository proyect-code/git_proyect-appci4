<?php

use CodeIgniter\Router\RouteCollection;
//namespace Config;
/**
 * @var RouteCollection $routes
 */
//$routes = Services::routes();
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('/');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

$routes->get('/', 'Login::index');
$routes->get('/home', 'Home::index');