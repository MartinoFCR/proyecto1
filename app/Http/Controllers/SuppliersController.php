<?php

namespace App\Http\Controllers;

use App\Models\suppliers;
use Illuminate\Http\Request;
use PhpParser\Lexer\TokenEmulator\ReverseEmulator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['suppliers'] = suppliers::all();
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
        $validator = Validator::make($request->all(), [
            'supplier_id' => 'required|string|max:40',
            'name_supplier' => 'required|string|max:100',
            'city_supplier' => 'required|string|max:100',
            'phone' => 'required|string|max:100',
            'email' => 'required|string|max:100',
        ], [
            'required' => 'El campo :attribute es obligatorio.',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $datasupplier = request()->except('_token');
        suppliers::insert($datasupplier);
        return redirect('suppliers')->with('mensaje', 'Proveedor Agregado con éxito');
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
    public function edit($supplier_id)
    {
        //
        $suppliers = suppliers::findOrFail($supplier_id);
        return view('menu/buys/edit_suppliers', compact('suppliers')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $supplier_id)
    {
        //
        $validator = Validator::make($request->all(), [
            'supplier_id' => 'required|string|max:40',
            'name_supplier' => 'required|string|max:100',
            'city_supplier' => 'required|string|max:100',
            'phone' => 'required|string|max:100',
            'email' => 'required|string|max:100',
        ], [
            'required' => 'El campo :attribute es obligatorio.',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $datasupplier = request()->except(['_token', '_method']);
        suppliers::where('supplier_id', '=', $supplier_id)->update($datasupplier);
        $suppliers = suppliers::findOrFail($supplier_id);
        return redirect('suppliers')->with('mensaje', 'Proveedor modificado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($supplier_id)
    {
        //
        suppliers::destroy($supplier_id);
        return redirect('suppliers')->with('mensaje', 'Proveedor eliminado con éxito');
    }
}
