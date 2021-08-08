<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/an', 'ClientController@index')->name('view.redirect');


Route::group(['prefix' => 'laptop', 'middleware' => ['locale']], function () {

    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.index');

    Route::get('supplier/', 'SupplierController@index')->name('supplier.index');
    Route::get('supplier/list', 'SupplierController@fetch_data')->name('supplier.fetch_data');
    Route::get('supplier/search', 'SupplierController@search')->name('supplier.search');
    Route::get('supplier/create', 'SupplierController@create')->name('supplier.create');
    Route::post('supplier/create', 'SupplierController@store')->name('supplier.store');
    Route::get('supplier/{sup_id}/edit', 'SupplierController@edit')->name('supplier.edit');
    Route::get('supplier/{id}/show', 'SupplierController@show')->name('supplier.show');
    Route::post('supplier/{id}/edit', 'SupplierController@update')->name('supplier.update');
    Route::get('supplier/{id}/destroy', 'SupplierController@destroy')->name('supplier.destroy');




    Route::get('category/', 'CategoryController@index')->name('category.index');
    Route::get('category/search', 'CategoryController@search')->name('category.search');
    Route::get('category/create', 'CategoryController@create')->name('category.create');
    Route::post('category/create', 'CategoryController@store')->name('category.store');
    Route::get('category/{sup_id}/edit', 'CategoryController@edit')->name('category.edit');
    Route::get('category/{id}/show', 'CategoryController@show')->name('category.show');
    Route::post('category/{id}/edit', 'CategoryController@update')->name('category.update');
    Route::get('category/{id}/destroy', 'CategoryController@destroy')->name('category.destroy');
    Route::get('category/filter', 'CategoryController@filterByCategory')->name('category.filterByCategory');
    Route::get('category/search', 'CategoryController@search')->name('category.search');



    Route::get('product/', 'ProductController@index')->name('product.index');
    Route::get('product/list', 'ProductController@fetch_data')->name('product.fetch_data');
    Route::get('product/create', 'ProductController@create')->name('product.create');
    Route::post('product/create', 'ProductController@store')->name('product.store');
    Route::get('product/{sup_id}/edit', 'ProductController@edit')->name('product.edit');
    Route::get('product/{id}/show', 'ProductController@show')->name('product.show');
    Route::post('product/{id}/edit', 'ProductController@update')->name('product.update');
    Route::get('product/{id}/destroy', 'ProductController@destroy')->name('product.destroy');
    Route::get('product/filter', 'ProductController@filterByCategory')->name('product.filterByCategory');
    Route::post('product/search', 'ProductController@search')->name('product.search');
    Route::get('change-language/{language}', 'LanguageController@changeLanguage')->name('lang.change-language');



    Route::get('/login', 'LoginController@showLogin')->name('show.login');
    Route::post('/login', 'LoginController@login')->name('user.login');
    Route::get('/', 'LoginController@showLaptop')->name('show.laptop');
    Route::get('/logout', 'LoginController@logout')->name('user.logout');



    Route::get('user/', 'UserController@index')->name('user.index');
    Route::get('user/list', 'UserController@fetch_data');
    Route::get('user/search', 'UserController@search')->name('user.search');
    Route::get('user/create', 'UserController@create')->name('user.create');
    Route::post('user/create', 'UserController@store')->name('user.store');
    Route::get('user/{sup_id}/edit', 'UserController@edit')->name('user.edit');
    Route::get('user/{id}/show', 'UserController@show')->name('user.show');
    Route::post('user/{id}/edit', 'UserController@update')->name('user.update');
    Route::get('user/{id}/destroy', 'UserController@destroy')->name('user.destroy');





    Route::get('customer/', 'CustomerController@index')->name('customer.index');
    Route::get('customer/list', 'CustomerController@fetch_data')->name('customer.fetch_data');
    Route::get('customer/search', 'CustomerController@search')->name('customer.search');
    Route::get('customer/create', 'CustomerController@create')->name('customer.create');
    Route::post('customer/create', 'CustomerController@store')->name('customer.store');
    Route::get('customer/{sup_id}/edit', 'CustomerController@edit')->name('customer.edit');
    Route::get('customer/{id}/show', 'CustomerController@show')->name('customer.show');
    Route::post('customer/{id}/edit', 'CustomerController@update')->name('customer.update');
    Route::get('customer/{id}/destroy', 'CustomerController@destroy')->name('customer.destroy');
    Route::get('customer/{id}/history', 'CustomerController@history')->name('customer.history');




    Route::get('order/', 'OrderController@index')->name('order.index');
//    Route::get('order/list', 'OrderController@fetch_data')->name('order.fetch_data');
    Route::get('order/{sup_id}/detail', 'OrderController@detail')->name('order.detail');
    Route::get('order/search', 'OrderController@search')->name('order.search');
//    Route::get('order/create', 'OrderController@create')->name('order.create');
//    Route::post('order/create', 'OrderController@store')->name('order.store');
//    Route::get('order/{id}/show', 'OrderController@show')->name('order.show');
    Route::post('order/{id}/update', 'OrderController@update')->name('order.update');
    Route::get('order/{id}/destroy', 'OrderController@destroy')->name('order.destroy');

});
Route::get('/', 'ClientController@index')->name('client.index');
Route::get('/home', 'ClientController@home')->name('client.home');
Route::get('/{cat_id}/category', 'ClientController@category')->name('client.category');
Route::get('/{prd_id}/product', 'ClientController@product')->name('client.product');
Route::post('/product/search', 'ClientController@search')->name('client.search');
Route::get('/contact', 'ClientController@contact')->name('client.contact');


//Route::get('{prd_id}/add-cart', 'CartController@addCart')->name('product.addcart');
//Route::get('/cart','CartController@cart')->name('product.cart');


Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::get('/cart/store', [CartController::class, 'storeCart'])->name('cart.store');
Route::post('/cart/update', [CartController::class, 'updateCart'])->name('cart.update');
Route::get('/cart/delete', [CartController::class, 'delete'])->name('cart.delete');
Route::post('/cart/order', [CartController::class, 'order'])->name('cart.order');

