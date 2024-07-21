<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/students', 'StudentController::index');
$routes->get('/students/create', 'StudentController::create');
//because we post the data
$routes->post('/students/add', 'StudentController::store');
$routes->get('/student/edit/(:num)', 'StudentController::edit/$1');
$routes->put('/student/update/(:num)', 'StudentController::update/$1');
$routes->get('/student/delete/(:num)', 'StudentController::delete/$1');
$routes->delete('/student/delete/(:num)', 'StudentController::delete/$1');
$routes->get('/student/confirm-delete/(:num)', 'StudentController::confirmdelete/$1');



$routes->get('products', 'ProductController::index');
$routes->get('products/(:any)', 'ProductController::find/$1');



//testing database
$routes->get('/test-database', 'TestDatabase::index');

// $routes->get('users/profile', function(){
//     return "I am user profile ";
// });


// $routes->group('users', static function ($routes) {

//     $routes->get('profile', function(){
//         return "I am user profile ";
//     });

//     $routes->get('orders', function(){
//         return "I am user orders ";
//     });
    
//     //$routes->get('profile', 'ProductController::profile');
//     //$routes->get('order', 'ProductController::order');
// });

