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

// OAuth Routes
Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
Auth::routes();
// Star page
Route::get('/', function () {
    return view('welcome');
});

//Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
//});

Route::resource('manufacturers', 'ManufacturersController');
Route::resource('products', 'ProductController');
Route::resource('posts', 'PostController');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/posts/{post}/comments', 'CommentsController@store');
// Shopping Card
Route::get('/add-to-cart/{id}', 'CartController@getAddToCart')->name('addToCart');
Route::get('/shopping-cart', 'CartController@getCart')->name('shoppingCart');
Route::get('/reduce{id}', 'CartController@getReduceByOne')->name('reduceByOne');
Route::get('/remove{id}', 'CartController@getRemoveItem')->name('removeItem');
// Profile
Route::get('/profile', 'CartController@getProfile')->name('profile');
// Checkout
Route::get('/checkout', 'CartController@getCheckout')->name('checkout')->middleware('auth');
Route::post('/checkout', 'CartController@postCheckout')->name('checkout')->middleware('auth');




