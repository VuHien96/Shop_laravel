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

Route::get('/','App\Http\Controllers\DashboardController@index')->name('dashboard.index');


Route::get('/categories','App\Http\Controllers\CategoryController@index')->name('categories.index');
Route::get('/categories/create','App\Http\Controllers\CategoryController@create')->name('categories.create');
Route::post('/categories/store','App\Http\Controllers\CategoryController@store')->name('categories.store');
Route::get('/categories/edit/{id}','App\Http\Controllers\CategoryController@edit')->name('categories.edit');
Route::put('/categories/update/{id}','App\Http\Controllers\CategoryController@update')->name('categories.update');
Route::get('/categories/destroy/{id}','App\Http\Controllers\CategoryController@destroy')->name('categories.destroy');


Route::get('/brands', 'App\Http\Controllers\BrandController@index')->name('brands.index');
Route::get('/brands/create', 'App\Http\Controllers\BrandController@create')->name('brands.create');
Route::post('/brands/store', 'App\Http\Controllers\BrandController@store')->name('brands.store');
Route::get('/brands/edit/{id}', 'App\Http\Controllers\BrandController@edit')->name('brands.edit');
Route::put('/brands/update/{id}', 'App\Http\Controllers\BrandController@update')->name('brands.update');
Route::get('/brands/destroy/{id}', 'App\Http\Controllers\BrandController@destroy')->name('brands.destroy');
