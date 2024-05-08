<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;

class FormController extends Controller
{
    public function procesar_login(Request $request)
    {
        return redirect()->action([HomeController::class, 'index']);
    }
}