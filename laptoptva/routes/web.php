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


Route::group(['prefix' => 'laptop'], function () {
    Route::get('supplier/', 'SupplierController@index')->name('supplier.index');
    Route::get('supplier/list', 'SupplierController@fetch_data');
    Route::get('supplier/create', 'SupplierController@create')->name('supplier.create');
    Route::post('supplier/create', 'SupplierController@store')->name('supplier.store');
    Route::get('supplier/{sup_id}/edit', 'SupplierController@edit')->name('supplier.edit');
    Route::get('supplier/{id}/show', 'SupplierController@show')->name('supplier.show');
    Route::post('supplier/{id}/edit', 'SupplierController@update')->name('supplier.update');
    Route::get('supplier/{id}/destroy', 'SupplierController@destroy')->name('supplier.destroy');
    Route::get('supplier/filter', 'SupplierController@filterByCategory')->name('supplier.filterByCategory');
    Route::get('supplier/search', 'SupplierController@search')->name('supplier.search');
    Route::get('supplier/{category_id}/tech', 'SupplierController@TechnologyCategory')->name('supplier.tech');
    Route::get('supplier/login', 'SupplierController@showLogin')->name('supplier.showLogin');
    Route::post('supplier/login', 'SupplierController@login')->name('supplier.login');
    Route::get('supplier/logout', 'SupplierController@logout')->name('supplier.logout');
});
