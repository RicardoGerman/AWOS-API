<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
|   contains the "web" middleware group. Now create something great!
|    return '<h1>Hello world Ricardo</h1>
});
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('prueba', function(){
    return view('prueba');
});

Route::get('estudiantes', 'estudiantes@index');
