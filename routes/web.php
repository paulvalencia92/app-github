<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('user', 'UserController');

Route::resource('post', 'PostController');


Route::get('/api', function(){
    return 'api';
});


Route::get('/api/firebase', 'AppFirebase');

Route::get('c/{id}', function ($id) {

});

//fea

// Nuevos cambios desde bitbucket
