<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Hotel');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Hotel::index');
$routes->delete('/Akomodasi/delete(:num)', 'Akomodasi::delete/$1');

// =========> Filter Auth <=========
$routes->get('/Admin', 'Admin::index', ['filter' => 'auth']);
$routes->get('/Admin/(:any)', 'Admin::$1', ['filter' => 'auth']);
$routes->get('/Akomodasi', 'Akomodasi::hotel', ['filter' => 'auth']);
$routes->get('/Akomodasi/(:any)', 'Akomodasi::$1', ['filter' => 'auth']);
$routes->get('/Room', 'Room::add', ['filter' => 'auth']);
$routes->get('/Room/(:any)', 'Room::$1', ['filter' => 'auth']);
// =========> End Filter Auth <=========


// (:any)		= untuk apapun, bisa huruf maupun angka
// (:alpha)		= hanya untuk alphabet
// (:num)		= hanya untuk angka
// (:alphanum)	= hanya untuk alphabet & huruf, kecuali karakter seperti (?,',/)
// (:segment)	= untuk apapun, kecuali slash /
$routes->get('/namaController/(:any)/(:num)', 'namaController::namaMethod/$1');
$routes->delete('/Admin/(:num)', 'Admin::delete_admin/$1');
$routes->get('/Admin/delete_admin/(:num)', 'Admin::admin');
$routes->get('/admin/delete_admin/(:num)', 'Admin::admin');
// $routes->get('/Admin/delete_admin/(:segment)', 'Admin::delete_admin/$1');

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
