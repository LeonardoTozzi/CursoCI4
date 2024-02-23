<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::index');
$routes->get('pagina_1', 'Main::pagina_1');
$routes->get('pagina_2', 'Main::pagina_2');

$routes->get('teste1/(:any)', 'Main::ph_any/$1');
$routes->get('teste2/(:segment)', 'Main::ph_segment/$1');
$routes->get('teste3/(:num)(:num)', 'Main::ph_num/$1/$2');
$routes->get('teste4/(:alpha)', 'Main::ph_alpha/$1'); 
$routes->get('teste5/(:alphanum)', 'Main::ph_alphanum/$1');
