<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::home');
$routes->get('histories', 'Pages::old');
$routes->get('szobo', 'Pages::szobo');
$routes->get('nb_one', 'Pages::nb_one');
$routes->get('article', 'Pages::article');
