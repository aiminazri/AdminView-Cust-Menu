<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('about.hello');
});
Route::get('/hello/morehello', function () {
    return 'More Hello World';
});
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|Route::get('/', function () {

    return view('welcome');
});
use App\Http\Controllers\cartController;

Route::get('/cart', 'App\Http\Controllers\cartController@cart');
Route::get('/details', 'App\Http\Controllers\cartController@details');
Route::post('/action', 'App\Http\Controllers\cartController@action');
use App\Http\Controllers\bookController;

Route::get('/about', 'App\Http\Controllers\bookController@about');
Route::get('/list', 'App\Http\Controllers\bookController@list');

Route::view('/userview', "userview");
Route::post('/usercontroller', "App\Http\Controllers\UserController@formSubmit");
*/
Route::get('/', function () {
    return view('shop.index');
});
Route::get('/cart', 'App\Http\Controllers\cartController@cart');
Route::get('/create', 'App\Http\Controllers\cartController@create');
Route::resource('student', 'App\Http\Controllers\StudentController');
Route::resource('menu', 'App\Http\Controllers\MenuController');
Route::resource('cust', 'App\Http\Controllers\CustController');


