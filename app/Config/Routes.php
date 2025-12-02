<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::halamanadmin');
$routes->get('/kriteria', 'Home::kriteria');
$routes->get('/alternatif', 'Home::alternatif');
