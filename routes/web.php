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


// Route::get('/master', function () {
//     return view('front.master');
// });

// Route::get('menu/product', function () {
//     return view('menu.product');
// });

// // Route::get('menu/contact', function (){
// //     return view('menu.contact');
// // }); //ini nanti mesti dihapus, ini buat ngetest aj

// Route::get('/back', function () {
//     return view('back.master');
// });



Auth::routes();

Route::get('contact/create', 'ContactController@create')->name('contact.create');
Route::post('contact', 'ContactController@store')->name('contact.store');
Route::get('/','ProfileRumahController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Profileclient', 'UserClientController@index')->name('Profileclient.index');
// Route::resource('contact', 'ContactController');


            
            // Route::group(['prefix' => 'admin'], function () {
            //     Route::get('/contact', 'ContactController@index' )->name('contact.index');
            //     Route::delete('/contact/{contact}', 'ContactController@destroy')->name('contact.destroy');
            //     Route::resource('/product', 'ProductController');
            //     Route::resource('/client', 'ClientController');
            //     Route::resource('/rumah', 'RumahController'); 
            // });
    Route::prefix('admin')->middleware(['auth'])->group(function () {
        // Route::get('/dashboard','DashboradController@index');
        Route::get('/contact', 'ContactController@index' )->name('contact.index');
        Route::delete('/contact/{contact}', 'ContactController@destroy')->name('contact.destroy');
        Route::resource('/product', 'ProductController');
        Route::resource('/client', 'ClientController');
        Route::resource('/rumah', 'RumahController');
        // Route::get('rumah','RumahController@index');
        
    });


    // Route::prefix('admin')->namespace('Admin')->middleware(['auth', 'admin'])->group(function(){
        
    // })
        
