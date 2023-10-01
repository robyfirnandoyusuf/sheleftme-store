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
Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'index'
]);

Route::get('/about-us', [
    'uses' => 'HomeController@about',
    'as' => 'about-us'
]);

Route::get('/payment-delivery', [
    'uses' => 'HomeController@paymentDelivery',
    'as' => 'payment-delivery'
]);


Route::get('/product', [
    'uses' => 'ProductController@index',
    'as' => 'product.index'
]);

Route::get('/product/{id}', [
    'uses' => 'ProductController@show',
    'as' => 'product.show'
]);
/* Route::group(['prefix' => 'login'], function () {
    Route::get('/', [
        'uses' => 'LoginController@index',
        'as' => 'index'
    ]);
}); */