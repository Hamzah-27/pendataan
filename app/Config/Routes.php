<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', 'Dashboard::index');
$routes->get('/dashboard/datapenduduk', 'Dashboard::datapenduduk', ['filter' => 'role:Admin']);
$routes->get('/dashboard/create', 'Dashboard::create', ['filter' => 'role:Admin']);

$routes->get('/pimpinan', 'Pimpinan::index', ['filter' => 'role:Pimpinan']);
$routes->get('/pimpinan/index', 'Pimpinan::index', ['filter' => 'role:Pimpinan']);
$routes->get('/pimpinan/laporandata', 'Pimpinan::laporandata', ['filter' => 'role:Pimpinan']);
$routes->get('/pimpinan/lapdatalaki', 'Pimpinan::lapdatalaki', ['filter' => 'role:Pimpinan']);
$routes->get('/pimpinan/lapdataperempuan', 'Pimpinan::lapdataperempuan', ['filter' => 'role:Pimpinan']);
$routes->get('/pimpinan/detail', 'Pimpinan::detail', ['filter' => 'role:Pimpinan']);

// $routes->get('/detail/(:any)', 'Dashboard::detail/$1');
/*
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