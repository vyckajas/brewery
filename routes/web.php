<?php

// OAuth Routes
Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
Auth::routes();
// Star page
Route::get('/', function () {
    return view('welcome');
});
// Contact Us
Route::get('contacts', function () {
    return view('contacts');
});

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
// Reservation
Route::group(['middleware' => 'auth'], function () {
    Route::resource('/events', 'EventController');
});

