<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FormController;

Route::get('/',                 [LoginController::class, 'login']);
Route::get('/forget_password',  [LoginController::class, 'forget_password']);
Route::get('/home',            [HomeController::class, 'index']);

// routes/web.php
Route::post('/procesar-formulario', [FormController::class, 'procesar_login'])->name('procesar-formulario');