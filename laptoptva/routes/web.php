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

Route::get('/an', 'ViewController@viewRedirect')->name('view.redirect');


Route::group(['prefix' => 'laptop', 'middleware' => ['locale']], function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::get('supplier/', 'SupplierController@index')->name('supplier.index');
    Route::get('supplier/list', 'SupplierController@fetch_data');
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
    Route::get('category/{category_id}/tech', 'CategoryController@TechnologyCategory')->name('category.tech');




    Route::get('product/', 'ProductController@index')->name('product.index');
    Route::get('product/search', 'ProductController@search')->name('product.search');
    Route::get('product/create', 'ProductController@create')->name('product.create');
    Route::post('product/create', 'ProductController@store')->name('product.store');
    Route::get('product/{sup_id}/edit', 'ProductController@edit')->name('product.edit');
    Route::get('product/{id}/show', 'ProductController@show')->name('product.show');
    Route::post('product/{id}/edit', 'ProductController@update')->name('product.update');
    Route::get('product/{id}/destroy', 'ProductController@destroy')->name('product.destroy');
    Route::get('product/filter', 'ProductController@filterByCategory')->name('product.filterByCategory');
    Route::get('product/search', 'ProductController@search')->name('product.search');
    Route::get('product/{category_id}/tech', 'ProductController@TechnologyCategory')->name('product.tech');


    Route::get('change-language/{language}', 'LanguageController@changeLanguage')->name('lang.change-language');
});
