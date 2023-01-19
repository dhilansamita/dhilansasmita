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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/example', [
    'as' => 'example.index', 'uses' => 'ExampleController@index'
]);

$router->get('/tasks', [
    'as' => 'task.index', 'uses' => 'TaskController@index'
]);

$router->get('/tasks/{id}', [
    'as' => 'task.show', 'uses' => 'TaskController@show'
]);

$router->post('/tasks', [
    'as' => 'task.store', 'uses' => 'TaskController@store'
]);

$router->put('/tasks/{id}', [
    'as' => 'task.update', 'uses' => 'TaskController@update'
]);


$router->delete('/tasks/{id}', [
    'as' => 'task.delete', 'uses' => 'TaskController@destroy'
]);


