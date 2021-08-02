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
    return view('welcome');
});

// respond with a text response to arequest to a specific route
Route::get('/text', function () {
  return "hello world";
});

// respond with json response
Route::get('/json', function () {
  return ["user" => "amr"];
});

// respond with a page.blade.php view
Route::get('/newpage', function () {
  return view('newpage');
});