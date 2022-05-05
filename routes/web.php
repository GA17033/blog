<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/



$router->get('/products', 'ProductoController@index');

//store products
$router->post('/products/create', 'ProductoController@store');

//update products
$router->post('/products/update/{id}', 'ProductoController@update');

// Delete
$router->delete('/products/delete/{id}', 'ProductoController@destroy');

$router->get('/', function () use ($router) {
    return $router->app->version();
});

