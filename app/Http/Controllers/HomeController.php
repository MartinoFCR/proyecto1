<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index( )
    {
        return view('menu/home');
    }
    public function config( )
    {
        return view('menu/config/company_config');
    }
    public function categories( )
    {
        return view('menu/config/categories');
    }
    public function offices( )
    {
        return view('menu/config/office');
    }
    public function employees( )
    {
        return view('menu/config/employees');
    }
    public function user_profile( )
    {
        return view('menu/config/user_profile');
    }
    public function users( )
    {
        return view('menu/config/users');
    }


    public function bills( )
    {
        return view('menu/sells/bills');
    }
    public function clients( )
    {
        return view('menu/sells/clients');
    }
    public function quotes( )
    {
        return view('menu/sells/quotes');
    }



    public function suppliers( )
    {
        return view('menu/buys/suppliers');
    }
    public function buys( )
    {
        return view('menu/buys/buys');
    }
    public function buys_orders( )
    {
        return view('menu/buys/buys_orders');
    }



    public function storages( )
    {
        return view('menu/storages/storages');
    }
    public function kardex( )
    {
        return view('menu/storages/kardex');
    }
    public function transfers( )
    {
        return view('menu/storages/transfers');
    }
    public function storage_config( )
    {
        return view('menu/storages/storage_config');
    }
    public function products( )
    {
        return view('menu/storages/products');
    }

    
}
