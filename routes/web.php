<?php

use App\Http\Controllers\FacebookController;
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

//login facebook
Route::get('auth/facebook', [FacebookController::class, 'redirectToFacebook']);
Route::get('auth/facebook/callback', [FacebookController::class, 'handleFacebookCallback']);

//authenticate
Route::get('/admin/dashboard','App\Http\Controllers\AdminController@dashboard')->name('admin.dashboard');
Route::get('/admin/login','App\Http\Controllers\AdminController@index')->name('admin.login');
Route::post('/admin/authenticate','App\Http\Controllers\AdminController@login')->name('admin.authenticate');
Route::get('/admin/logout','App\Http\Controllers\AdminController@logout')->name('admin.logout');


//Category
Route::get('/admin/categories','App\Http\Controllers\CategoryController@index')->name('categories.index');
Route::get('/admin/categories/create','App\Http\Controllers\CategoryController@create')->name('categories.create');
Route::post('/admin/categories/store','App\Http\Controllers\CategoryController@store')->name('categories.store');
Route::get('/admin/categories/edit/{id}','App\Http\Controllers\CategoryController@edit')->name('categories.edit');
Route::put('/admin/categories/update/{id}','App\Http\Controllers\CategoryController@update')->name('categories.update');
Route::get('/admin/categories/destroy/{id}','App\Http\Controllers\CategoryController@destroy')->name('categories.destroy');


//Brand
Route::get('/admin/brands', 'App\Http\Controllers\BrandController@index')->name('brands.index');
Route::get('/admin/brands/create', 'App\Http\Controllers\BrandController@create')->name('brands.create');
Route::post('/admin/brands/store', 'App\Http\Controllers\BrandController@store')->name('brands.store');
Route::get('/admin/brands/edit/{id}', 'App\Http\Controllers\BrandController@edit')->name('brands.edit');
Route::put('/admin/brands/update/{id}', 'App\Http\Controllers\BrandController@update')->name('brands.update');
Route::get('/admin/brands/destroy/{id}', 'App\Http\Controllers\BrandController@destroy')->name('brands.destroy');


//Product
Route::get('/admin/products','App\Http\Controllers\ProductController@index')->name('products.index');
Route::get('/admin/products/create','App\Http\Controllers\ProductController@create')->name('products.create');
Route::post('/admin/products/store','App\Http\Controllers\ProductController@store')->name('products.store');
Route::get('/admin/products/edit/{id}','App\Http\Controllers\ProductController@edit')->name('products.edit');
Route::put('/admin/products/update{id}','App\Http\Controllers\ProductController@update')->name('products.update');
Route::get('/admin/products/destroy{id}','App\Http\Controllers\ProductController@destroy')->name('products.destroy');

//front-end

Route::get('/','App\Http\Controllers\HomeController@index')->name('homes.index');

//product
Route::get('/product/categories/{id}','App\Http\Controllers\CategoryController@getProductByCategory')->name('product.categories');
Route::get('/product/brands/{id}','App\Http\Controllers\BrandController@getProductByBrand')->name('product.brand');

Route::get('/products/{id}','App\Http\Controllers\ProductController@getDetailsProduct')->name('product.details');

//cart
Route::post('/carts/create','App\Http\Controllers\CartController@createCart')->name('carts.store');
Route::get('/carts','App\Http\Controllers\CartController@showCart')->name('carts.index');
Route::get('/carts/destroy{rowId}','App\Http\Controllers\CartController@deleteCart')->name('carts.destroy');
Route::post('/carts/update','App\Http\Controllers\CartController@updateCartQuantity')->name('carts.update.quantity');

//checkout
Route::get('/login-checkout','App\Http\Controllers\CheckoutController@loginCheckout')->name('checkout.login');
Route::post('/customers/create','App\Http\Controllers\CheckoutController@createCustomer')->name('customers.store');
Route::get('/checkout','App\Http\Controllers\CheckoutController@checkout')->name('checkout');
Route::post('/save-checkout-customer','App\Http\Controllers\CheckoutController@createCheckoutCustomer')->name('checkout.customer');
Route::get('/logout-checkout','App\Http\Controllers\CheckoutController@logoutCheckout')->name('logout.checkout');
Route::post('/login-customer','App\Http\Controllers\CheckoutController@loginCustomer')->name('login.customer');
Route::get('/payment','App\Http\Controllers\CheckoutController@payment')->name('payment');


//order
Route::post("/orders/create",'App\Http\Controllers\CheckoutController@orderPlace')->name('orders.create');
Route::get("/orders",'App\Http\Controllers\CheckoutController@getOrders')->name('orders.index');
Route::get("/orders/show/{id}",'App\Http\Controllers\OrderController@detailOrder')->name('orders.show');

//sendmail
Route::get('/email', 'App\Http\Controllers\EmailController@create');
Route::post('/email', 'App\Http\Controllers\EmailController@sendEmail')->name('send.email');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



