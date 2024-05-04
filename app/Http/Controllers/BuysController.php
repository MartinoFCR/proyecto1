<?php

namespace App\Http\Controllers;

use App\Models\buys;
use App\Models\suppliers;
use App\Models\products;
use Illuminate\Http\Request;
use App\Http\Resquest\Buys\StoreRequest;
use App\Http\Resquest\Buys\UpdateRequest;
use App\Models\buys_orders;

class BuysController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $buy = buys::get();
        return view('menu/buys/buys', compact('buys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $suppliers = suppliers::get();
        $products = Products::get();
        return view('menu/buys/buys_create', compact('suppliers', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $buy = buys::create($request->all());
        foreach ($request->products_id as $key => $value) {
            $results[] = array("buy_id" => $buy->id, "products_id" => $value, 
            "quantity" => $request->quantity[$key], "price" => $request->price[$key]);
        }
        $buy->buys_orders()->createMany($results);
        return redirect()->route('menu/buys/buys');
    }

    /**
     * Display the specified resource.
     */
    public function show(buys $buys)
    {
        //
        return view('menu/buys/buys_show', compact('buys'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(buys $buys)
    {
        //
        $data['suppliers'] = suppliers::get();
        return view('menu/buys/buys_show', compact('buys'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, buys $buys)
    {
        //
        // $buys->update($request->all());
        // return redirect()->route('menu/buys/buys');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(buys $buys)
    {
        //
        // $buys->delete();
        // return redirect()->route('menu/buys/buys');
    }
}
