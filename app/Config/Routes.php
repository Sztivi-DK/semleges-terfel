<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('histories', 'Home::index');
$routes->get('szoboszlaj', 'Home::index');
$routes->get('nb_one', 'Home::index');
