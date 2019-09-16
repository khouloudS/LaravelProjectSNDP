<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::middleware('api')->group(function (){

    Route::prefix('products')->group(function (){

        Route::post('/', 'Api\ProductApiController@index')->name('products.api.index');
        Route::post('/store', 'Api\ProductApiController@store')->name('products.api.store');
        Route::post('/{id}/show', 'Api\ProductApiController@show')->name('products.api.show');
        /*Route::get('/{id}/edit', 'ProductController@edit')->name('products.edit');
        Route::post('/{id}/update', 'ProductController@update')->name('products.update');
        Route::get('/{id}/delete', 'ProductController@delete')->name('products.delete');*/

    });

Route::prefix('customers')->group(function () {
    Route::post('/', 'Api\CustomerApiController@index')->name('customers.api.index');
    Route::post('/store', 'Api\CustomerApiController@store')->name('customers.api.store');
    Route::post('/update', 'Api\CustomerApiController@update')->name('customers.api.update');
    Route::post('/show', 'Api\CustomerApiController@show')->name('customers.api.show');
    Route::post('/delete', 'Api\CustomerApiController@delete')->name('customers.api.delete');



});

Route::prefix('promotions')->group(function (){

    Route::post('/', 'Api\PromotionApiController@index')->name('promotions.api.index');
    Route::post('/store', 'Api\PromotionApiController@store')->name('promotions.api.store');
    Route::post('/{id}/show', 'Api\PromotionApiController@show')->name('products.api.show');
    /*Route::get('/{id}/edit', 'ProductController@edit')->name('products.edit');
    Route::post('/{id}/update', 'ProductController@update')->name('products.update');
    Route::get('/{id}/delete', 'ProductController@delete')->name('products.delete');*/

});

Route::prefix('managers')->group(function (){

    Route::post('/', 'Api\ManagerApiController@index')->name('managers.api.index');
    Route::post('/store', 'Api\ManagerApiController@store')->name('managers.api.store');
    Route::post('/{id}/show', 'Api\ManagerApiController@show')->name('managers.api.show');
    /*Route::get('/{id}/edit', 'ProductController@edit')->name('products.edit');
    Route::post('/{id}/update', 'ProductController@update')->name('products.update');
    Route::get('/{id}/delete', 'ProductController@delete')->name('products.delete');*/

});

Route::prefix('stations')->group(function (){

    Route::post('/', 'Api\StationApiController@index')->name('stations.api.index');
    Route::post('/store', 'Api\StationApiController@store')->name('stations.api.store');
    Route::post('/{id}/show', 'Api\StationApiController@show')->name('stations.api.show');
    /*Route::get('/{id}/edit', 'ProductController@edit')->name('products.edit');
    Route::post('/{id}/update', 'ProductController@update')->name('products.update');
    Route::get('/{id}/delete', 'ProductController@delete')->name('products.delete');*/

});
/*
Route::prefix('customers')->group(function () {
    Route::post('/', 'Api\CustomerApiController@index')->name('customers.api.index');
    Route::post('/store', 'Api\CustomerApiController@store')->name('customers.api.store');
    Route::post('/update', 'Api\CustomerApiController@update')->name('customers.api.update');
    Route::post('/show', 'Api\CustomerApiController@show')->name('customers.api.show');
    Route::post('/delete', 'Api\CustomerApiController@delete')->name('customers.api.delete');



});
*/

Route::prefix('sales')->group(function () {
    Route::post('/', 'Api\SalesApiController@index')->name('sales.api.index');
    Route::post('/store', 'Api\SalesApiController@store')->name('sales.api.store');
    Route::post('/update', 'Api\SalesApiController@update')->name('sales.api.update');
    Route::post('/show', 'Api\SalesApiController@show')->name('sales.api.show');
    Route::post('/delete', 'Api\SalesApiController@delete')->name('sales.api.delete');



});

Route::prefix('ozekimessageouts')->group(function () {
    Route::post('/', 'Api\OzekimessageoutApiController@index')->name('ozekimessageouts.api.index');
    Route::post('/store', 'Api\OzekimessageoutApiController@store')->name('ozekimessageouts.api.store');
    Route::post('/update', 'Api\OzekimessageoutApiController@update')->name('ozekimessageouts.api.update');
    Route::post('/show', 'Api\OzekimessageoutApiController@show')->name('ozekimessageouts.api.show');
    Route::post('/delete', 'Api\OzekimessageoutApiController@delete')->name('ozekimessageouts.api.delete');



});
//-
//});

