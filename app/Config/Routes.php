<?php

use CodeIgniter\Router\RouteCollection;

$routes->setAutoRoute(true);

//
// @var RouteCollection $routes
//

$routes->get('/', 'Home::index');
$routes->get('unidades','Unidades::index');
$routes->get('unidades/nuevo','Unidades::nuevo');
$routes->post('unidades/insertar','Unidades::insertar');
$routes->get('unidades/eliminados','Unidades::eliminados');
$routes->get('unidades/editar/(:num)','Unidades::editar/$1');
$routes->get('unidades/eliminar/(:num)','Unidades::eliminar/$1');
$routes->get('unidades/reingresar/(:num)','Unidades::reingresar/$1');
$routes->post('unidades/actualizar','Unidades::actualizar');
//$routes->get('unidades/actualizar/(:num)','Unidades::actualizar/$1');


$routes->get('categorias','Categorias::index');
$routes->get('categorias/nuevo','Categorias::nuevo');
$routes->post('categorias/insertar','Categorias::insertar');
$routes->get('categorias/eliminados','Categorias::eliminados');
$routes->get('categorias/editar/(:num)','Categorias::editar/$1');
$routes->get('categorias/eliminar/(:num)','Categorias::eliminar/$1');
$routes->get('categorias/reingresar/(:num)','Categorias::reingresar/$1');
$routes->post('categorias/actualizar', 'Categorias::actualizar');

