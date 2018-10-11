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

Route::get('/', function () {
    return view('home');
});
Route::get('/add', function () {
    return view('add');
});
Route::get('/edit', function () {
    return view('edit');
});

Route::post('/add/submit', 'post_controller@submit');
Route::get('/', 'post_controller@get');
Route::get('/home/edit', 'post_controller@edit');
