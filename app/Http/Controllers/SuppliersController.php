<?php

namespace App\Http\Controllers;

use App\Models\suppliers;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['suppliers'] = suppliers::paginate(15);
        return view('menu/buys/suppliers', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('menu/buys/create_suppliers');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datasupplier = request()->except('_token');
        suppliers::insert($datasupplier);
        return response()->json($datasupplier);
    } 

    /**
     * Display the specified resource.
     */
    public function show(suppliers $suppliers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(suppliers $suppliers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, suppliers $suppliers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($supplier_id)
    {
        //
        suppliers::destroy($supplier_id);
        return redirect('suppliers');
    }
}
