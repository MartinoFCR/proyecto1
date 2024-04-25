<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FormController;

Route::get('/',                 [LoginController::class, 'login']);
Route::get('/forget_password',  [LoginController::class, 'forget_password']);
Route::get('/home',             [HomeController::class, 'index']);

Route::get('/config',           [HomeController::class, 'config']);
Route::get('/categories',       [HomeController::class, 'categories']);
Route::get('/offices',          [HomeController::class, 'offices']);
Route::get('/employees',        [HomeController::class, 'employees']);
Route::get('/user_profile',     [HomeController::class, 'user_profile']);
Route::get('/users',            [HomeController::class, 'users']);

Route::get('/bills',            [HomeController::class, 'bills']);
Route::get('/clients',          [HomeController::class, 'clients']);
Route::get('/quotes',           [HomeController::class, 'quotes']);

Route::get('/suppliers',        [HomeController::class, 'suppliers']);
Route::get('/buys',             [HomeController::class, 'buys']);
Route::get('/buys_orders',      [HomeController::class, 'buys_orders']);

Route::get('/storages',         [HomeController::class, 'storages']);
Route::get('/kardex',           [HomeController::class, 'kardex']);
Route::get('/transfers',        [HomeController::class, 'transfers']);
Route::get('/storage_config',   [HomeController::class, 'storage_config']);
Route::get('/products',         [HomeController::class, 'products']);

// routes/web.php
Route::post('/procesar-formulario', [FormController::class, 'procesar_login'])->name('procesar-formulario');