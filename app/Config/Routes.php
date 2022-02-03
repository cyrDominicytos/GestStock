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
$routes->setDefaultController('Auth');
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
$routes->get('/', 'Auth::index');
$routes->get('/logout', 'Auth::logout');
$routes->post('/sign_in', 'Auth::login');

$routes->post('/sign_up', 'Auth::create_user');
$routes->post('/user/update/(:num)', 'Auth::edit_user/$1');

$routes->get('/user/edit/(:num)', 'Auth::update_user/$1');
$routes->get('/user/banish/(:num)', 'Auth::deactivate/$1');
$routes->get('/user/activate/(:num)', 'Auth::activate/$1');

//roles and permissions
$routes->get('/groups/list', 'Auth::role_permission');

$routes->get('/login', 'Auth::index');
$routes->get('/register', 'Auth::register');
$routes->get('/users/list', 'Users::list');




//External Entity
$routes->get('external/create', 'ExternalEntity::create');
//$routes->get('news/(:segment)', 'News::view/$1');
//$routes->get('news', 'News::index');

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
