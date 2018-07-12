<?php

use Illuminate\Auth\Middleware\Authenticate;
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
    $products = DB::table('products')->get();
    return view('index')->with(compact('products'));
});
Route::get('/products/{product}' , 'ProductsController@show');



Route::get('/orders', 'OrdersController@create');
Route::get('/orders/{order}' , 'OrdersController@show');
Route::post('/orders', 'OrdersController@store');


Route::get('/pages', 'PagesController@index');
Route::get('/pages/{page}' , 'PagesController@show');

Route::put('/pages/{page}/comments','CommentsController@store');


Route::get('/cart', 'CartController@index')->middleware('auth');
Route::get('/cart/{product}', 'CartController@store');
Route::get('/cart/{product}/delete', 'CartController@remove');
Route::get('/notAuthenticate', 'CartController@notAuthenticate');


Route::get('/registration', 'RegistrationController@create');
Route::put('/registration', 'RegistrationController@store');
Route::get('/session/destroy', 'SessionsController@destroy');
Route::get('/session','SessionsController@create');
Route::post('/session','SessionsController@store');


Route::get('/admin', 'admin\IndexController@index');


Route::get('/admin/orders', 'admin\OrdersController@index');
Route::delete('/admin/orders/{order}/{product}', 'admin\OrdersController@removeProduct');


Route::get('/admin/products', 'admin\ProductsController@index');
Route::get('/admin/products/create', 'admin\ProductsController@create');
Route::get('/admin/products/{product}' , 'admin\ProductsController@show');
Route::post('/admin/products/{product}','admin\ProductsController@update');
Route::get('/admin/products/{product}/edit', 'admin\ProductsController@edit');
Route::put('/admin/products', 'admin\ProductsController@store');
Route::get('/admin/products/{product}/delete','admin\ProductsController@delete');
Route::delete('/admin/products/{product}', 'admin\ProductsController@destroy');

Route::get('/admin/pages/create', 'admin\PagesController@create');
Route::get('/admin/pages', 'admin\PagesController@index');
Route::get('/admin/pages/{page}' , 'admin\PagesController@show');
Route::put('/admin/pages', 'admin\PagesController@store');
Route::post('/admin/pages/{page}','admin\PagesController@update');
Route::get('/admin/pages/{page}/edit', 'admin\PagesController@edit');
Route::get('/admin/pages/{page}/delete','admin\PagesController@delete');
Route::delete('/admin/pages/{page}', 'admin\PagesController@destroy');

Route::get('/admin/comments', 'admin\CommentsController@index');
Route::get('/admin/comments/{comment}/destroy', 'admin\CommentsController@destroy');





