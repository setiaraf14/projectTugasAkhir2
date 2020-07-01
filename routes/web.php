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

// Route::get('/master', function () {
//     return view('front.master');
// });

// Route::get('menu/product', function () {
//     return view('menu.product');
// });

Route::get('/back', function () {
    return view('back.master');
});



Auth::routes();

Route::resource('contact', 'ContactController');
Route::resource('product', 'ProductController');
Route::resource('client', 'ClientController');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user/client', 'UserClientController@index');
