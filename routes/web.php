<?php

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

$router->get('/dispensadores', 'DispensadorController@index');
$router->post('/dispensadores', 'DispensadorController@store');
$router->get('/dispensadores/{author}', 'DispensadorController@show');
$router->put('/dispensadores/{author}', 'DispensadorController@update');
$router->patch('/dispensadores/{author}', 'DispensadorController@update');
$router->delete('/dispensadores/{author}', 'DispensadorController@destroy');
/*
$router->group(['middleware' => 'auth:api'], function () use ($router){
    $router->get('/dispensadores', 'DispensadorController@index');
});
$router->group(['middleware' => 'auth:api'], function () use ($router){
    $router->post('/dispensadores', 'DispensadorController@store');
});
$router->group(['middleware' => 'auth:api'], function () use ($router){
    $router->get('/dispensadores/{author}', 'DispensadorController@show');
});
$router->group(['middleware' => 'auth:api'], function () use ($router){
    $router->put('/dispensadores/{author}', 'DispensadorController@update');
});
$router->group(['middleware' => 'auth:api'], function () use ($router){
    $router->patch('/dispensadores/{author}', 'DispensadorController@update');
});
$router->group(['middleware' => 'auth:api'], function () use ($router){
    $router->delete('/dispensadores/{author}', 'DispensadorController@destroy');
});*/
