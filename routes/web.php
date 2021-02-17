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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/','App\Http\Controllers\DashboardController@index')->name('dashboard.index');

//authenticate
Route::get('/admin/dashboard','App\Http\Controllers\AdminController@dashboard')->name('admin.dashboard');
Route::get('/admin/login','App\Http\Controllers\AdminController@index')->name('admin.login');
Route::post('/admin/authenticate','App\Http\Controllers\AdminController@login')->name('admin.authenticate');
Route::get('/admin/logout','App\Http\Controllers\AdminController@logout')->name('admin.logout');


//Category
Route::get('/categories','App\Http\Controllers\CategoryController@index')->name('categories.index');
Route::get('/categories/create','App\Http\Controllers\CategoryController@create')->name('categories.create');
Route::post('/categories/store','App\Http\Controllers\CategoryController@store')->name('categories.store');
Route::get('/categories/edit/{id}','App\Http\Controllers\CategoryController@edit')->name('categories.edit');
Route::put('/categories/update/{id}','App\Http\Controllers\CategoryController@update')->name('categories.update');
Route::get('/categories/destroy/{id}','App\Http\Controllers\CategoryController@destroy')->name('categories.destroy');


//Brand
Route::get('/brands', 'App\Http\Controllers\BrandController@index')->name('brands.index');
Route::get('/brands/create', 'App\Http\Controllers\BrandController@create')->name('brands.create');
Route::post('/brands/store', 'App\Http\Controllers\BrandController@store')->name('brands.store');
Route::get('/brands/edit/{id}', 'App\Http\Controllers\BrandController@edit')->name('brands.edit');
Route::put('/brands/update/{id}', 'App\Http\Controllers\BrandController@update')->name('brands.update');
Route::get('/brands/destroy/{id}', 'App\Http\Controllers\BrandController@destroy')->name('brands.destroy');


//Product
Route::get('/products','App\Http\Controllers\ProductController@index')->name('products.index');
Route::get('/products/create','App\Http\Controllers\ProductController@create')->name('products.create');
Route::post('/products/store','App\Http\Controllers\ProductController@store')->name('products.store');
Route::get('/products/edit/{id}','App\Http\Controllers\ProductController@edit')->name('products.edit');
Route::put('/products/update{id}','App\Http\Controllers\ProductController@update')->name('products.update');
Route::get('/products/destroy{id}','App\Http\Controllers\ProductController@destroy')->name('products.destroy');
