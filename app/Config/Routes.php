<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Pages');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.



$routes->get('/', 'Pages::index');
// after login
$routes->get('/dashboard', 'Pages::dashboard', ['filter' => 'role:user,admin,atasan']);

// user
$routes->group('', ['filter' => 'role:user'], function ($routes) {
    $routes->get('/dashboard', 'Pages::dashboard');
    $routes->post('/user', 'UserController::index');
    $routes->get('/user', 'UserController::index');
    $routes->get('/ajukan', 'UserController::mengajukan');
    $routes->post('/ajukan/simpan/(:segment)', 'ProposalUserController::index/$1');
    $routes->get('/ajukan/(:segment)', 'UserController::isiForm/$1');
    $routes->get('/daftar-pengajuan', 'UserController::daftarPengajuan');
    $routes->get('/download/(:segment)', 'ProposalUserController::downloadProposal/$1');
    $routes->get('/draft', 'UserController::Draft');
    $routes->get('/kirim-proposal/(:segment)', 'UserController::submitDraft/$1');
    $routes->get('/riwayat', 'UserController::Riwayat');
    $routes->get('/profile', 'UserController::index');
});

// admin
$routes->group('', ['filter' => 'role:admin'], function ($routes) {
    $routes->get('/dashboard', 'Pages::dashboard');
    $routes->post('/user', 'UserController::index');
    $routes->get('/user', 'UserController::index');
    $routes->get('/ajukan', 'UserController::mengajukan');
    $routes->get('/ajukan/(:segment)', 'UserController::isiForm/$1');
    $routes->get('/draft', 'UserController::index');
    $routes->get('/daftar-pengajuan', 'UserController::index');
    $routes->get('/riwayat', 'UserController::index');
    $routes->get('/profile', 'UserController::index');
});

// atasan
$routes->group('', ['filter' => 'role:atasan'], function ($routes) {
    $routes->get('/dashboard', 'Pages::dashboard');
    $routes->post('/user', 'UserController::index');
    $routes->get('/user', 'UserController::index');
    $routes->get('/ajukan', 'UserController::mengajukan');
    $routes->get('/ajukan/(:segment)', 'UserController::isiForm/$1');
    $routes->get('/draft', 'UserController::index');
    $routes->get('/daftar-pengajuan', 'UserController::index');
    $routes->get('/riwayat', 'UserController::index');
    $routes->get('/profile', 'UserController::index');
});








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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
