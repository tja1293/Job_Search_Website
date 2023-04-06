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
$routes->setDefaultController('Home');
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

$routes->get('/', 'Home::index');

use App\Controllers\News; 								
use App\Controllers\Pages;
use App\Controllers\Jobs;
use App\Controllers\Reviews;


//------------------------------------------------------------------------------------------------------
// ## These routes display the all all jobs page with typing in the url "jobs"
//------------------------------------------------------------------------------------------------------
$routes->match(['post'], 'jobs', [Jobs::class, 'alljobs']);
$routes->get('jobs', [Jobs::class, 'alljobs']);
//------------------------------------------------------------------------------------------------------



//------------------------------------------------------------------------------------------------------
// ## This route displays the one job page when it is passed a jobID into the segment eg. "jobs/177623"
//------------------------------------------------------------------------------------------------------
$routes->get('jobs/(:segment)', [Jobs::class, 'onejob']);
//------------------------------------------------------------------------------------------------------



//------------------------------------------------------------------------------------------------------
// ## This route displays the all jobs page when a keyword from is added after "jobs/keyword/"admin"
//------------------------------------------------------------------------------------------------------
$routes->get('jobs/keyword/(:segment)', [Jobs::class, 'jobskeyword']);
//------------------------------------------------------------------------------------------------------



//------------------------------------------------------------------------------------------------------
// ## This route displays the all jobs page when a location, eg- "jobs/location/wolverhampton"
//------------------------------------------------------------------------------------------------------
$routes->get('jobs/location/(:segment)', [Jobs::class, 'jobslocation']);
//------------------------------------------------------------------------------------------------------



//------------------------------------------------------------------------------------------------------
// ## This route is to load to Homepage
//------------------------------------------------------------------------------------------------------
$routes->get('home', [Jobs::class, 'homepage']);
//------------------------------------------------------------------------------------------------------


//------------------------------------------------------------------------------------------------------
// ## This route is to display the live search function when a user starts typing.
//------------------------------------------------------------------------------------------------------
$routes->get('livesearch', [Jobs::class, 'livesearch']);
//------------------------------------------------------------------------------------------------------



//------------------------------------------------------------------------------------------------------
//							Review/database Routing
//------------------------------------------------------------------------------------------------------

$routes->match(['get', 'post'], 'news/create', [News::class, 'create']);
$routes->get('news/(:segment)', [News::class, 'view']);
$routes->get('reviews', [News::class, 'index']);
$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);


$routes->get('register', [Reviews::class, 'register']);

//------------------------------------------------------------------------------------------------------





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
