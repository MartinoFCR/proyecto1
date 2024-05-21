<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\BuysController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UsersProfilesController;


Route::get('/',                 [LoginController::class, 'login']);
Route::get('/forget_password',  [LoginController::class, 'forget_password']);
Route::get('/home',             [HomeController::class, 'index']);

Route::get('/config',           [HomeController::class, 'config']);
Route::get('/categories',       [HomeController::class, 'categories']);
Route::get('/offices',          [HomeController::class, 'offices']);




Route::resource('clients', CustomersController::class);
Route::get('/quotes',           [HomeController::class, 'quotes']);

Route::get('/suppliers',        [HomeController::class, 'suppliers']);
Route::get('/buys_orders',      [HomeController::class, 'buys_orders']);

Route::get('/storages',         [HomeController::class, 'storages']);
Route::get('/kardex',           [HomeController::class, 'kardex']);
Route::get('/transfers',        [HomeController::class, 'transfers']);
Route::get('/storage_config',   [HomeController::class, 'storage_config']);

Route::resource('employees', EmployeeController::class);
Route::resource('user_profile', UsersProfilesController::class);
Route::resource('products', ProductsController::class);
Route::resource('suppliers', SuppliersController::class);
Route::resource('buys', BuysController::class);
Route::resource('users', UsersController::class);
Route::resource('sale', SaleController::class);

// routes/web.php
Route::post('/procesar-formulario', [FormController::class, 'procesar_login'])->name('procesar-formulario');
