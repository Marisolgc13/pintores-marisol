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
Route::get('/plantilla', [
    'uses' =>'Controlador@plantilla',
    'as' => 'plantilla'
]);

Route::get('/da vinci', [
    'uses' => 'Controlador@davinci', 
    'as' => 'da vinci'
]);

Route::get('/dali', [
    'uses' => 'Controlador@dali',
    'as' => 'dali'
]);

Route::get('/frida', [
    'uses' => 'Controlador@frida',
    'as' => 'frida'
]);

Route::get('/picasso', [
    'uses' => 'Controlador@picasso',
    'as' => 'picasso'
]);

Route::get('/vicent', [
    'uses' => 'Controlador@vicent',
    'as' => 'vicent'
]);
