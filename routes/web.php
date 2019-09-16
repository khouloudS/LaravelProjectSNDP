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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('test', function(){
    return view('layouts.main');
});

Route::middleware('auth')->group(function (){

    Route::prefix('products')->group(function (){

        Route::get('/', 'ProductController@index')->name('products.index');
        Route::get('/create', 'ProductController@create')->name('products.create');
        Route::post('/store', 'ProductController@store')->name('products.store');
        Route::get('/{id}/show', 'ProductController@show')->name('products.show');
        Route::get('/{id}/edit', 'ProductController@edit')->name('products.edit');
        Route::post('/{id}/update', 'ProductController@update')->name('products.update');
        Route::get('/{id}/delete', 'ProductController@delete')->name('products.delete');

    });

    Route::prefix('promotions')->group(function (){

        Route::get('/', 'PromotionController@index')->name('promotions.index');
        Route::get('/product/{id}/create', 'PromotionController@create')->name('promotions.create');
        Route::post('/product/{id}/store', 'PromotionController@store')->name('promotions.store');
        Route::get('/{id}/show', 'PromotionController@show')->name('promotions.show');
        Route::get('/{id}/edit', 'PromotionController@edit')->name('promotions.edit');
        Route::post('/{id}/update', 'PromotionController@update')->name('promotions.update');
        Route::get('/{id}/delete', 'PromotionController@delete')->name('promotions.delete');

    });

    Route::prefix('managers')->group(function (){

        Route::get('/', 'ManagerController@index')->name('managers.index');
        Route::get('/create', 'ManagerController@create')->name('managers.create');
        Route::post('/store', 'ManagerController@store')->name('managers.store');
        Route::get('/{id}/show', 'ManagerController@show')->name('managers.show');
        Route::get('/{id}/edit', 'ManagerController@edit')->name('managers.edit');
        Route::post('/{id}/update', 'ManagerController@update')->name('managers.update');
        Route::get('/{id}/delete', 'ManagerController@delete')->name('managers.delete');

    });

    Route::prefix('stations')->group(function (){

        Route::get('/', 'StationController@index')->name('stations.index');
        Route::get('/create', 'StationController@create')->name('stations.create');
        Route::post('/store', 'StationController@store')->name('stations.store');
        Route::get('/{id}/show', 'StationController@show')->name('stations.show');
        Route::get('/{id}/edit', 'StationController@edit')->name('stations.edit');
        Route::post('/{id}/update', 'StationController@update')->name('stations.update');
        Route::get('/{id}/delete', 'StationController@delete')->name('stations.delete');

    });


    Route::prefix('customers')->group(function (){

        Route::get('/', 'CustomerController@index')->name('customers.index');
      //  Route::get('/create', 'StationController@create')->name('stations.create');
        Route::post('/store', 'CustomerController@store')->name('customers.store');
        Route::get('/{id}/show', 'CustomerController@show')->name('customers.show');
       // Route::get('/{id}/edit', 'StationController@edit')->name('stations.edit');
        //Route::post('/{id}/update', 'StationController@update')->name('stations.update');
        //Route::get('/{id}/delete', 'StationController@delete')->name('stations.delete');

    });

});
