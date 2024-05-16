<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Browser;

class BrowserController extends Controller
{
    public function index()    {
        $prendas = Browser::all();

        $puntos = [];
        foreach($prendas as $prenda){
            $puntos[] = ['name' => $prenda['nombre'], 'y' => floatval($prenda['porcentaje'])];
        }
        return view("menu/home", ["data" => json_encode($puntos)]);
    }
}
