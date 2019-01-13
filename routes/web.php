<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$router->get('/', function () {
    return view('welcome');
});

$router->middleware('auth')
       ->group(function ($router) {
           $router->get('/projects', 'ProjectsController@index')->name('projects.index');
           $router->post('/projects', 'ProjectsController@store')->name('projects.store');
           $router->get('/projects/{project}', 'ProjectsController@show')->name('projects.show');
           $router->get('/home', 'HomeController@index')->name('home');
       });

Auth::routes();
