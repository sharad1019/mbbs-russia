<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/kleido', 'Home::kleido');
$routes->get('/route-to-india', 'Home::routeToIndia');
$routes->get('/travxevent', 'Home::travxevent');
$routes->get('/under-construction', 'Home::UnderConstruction');
