<?php

namespace App\Http\Controllers;

use App\Models\store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $dataStore['stores'] = store::all();
        return view('menu/storages/storages', $dataStore);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('menu/storages/create_storage');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'store_id' => 'required|string|max:40',
            'name_store' => 'required|string|max:100',
            'address_store' => 'required|string|max:100',
            'incharge_store' => 'required|string|max:100',
            'phone' => 'required|string|max:100',
        ], [
            'required' => 'El campo :attribute es obligatorio.',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $dataStore = request()->except('_token');
        store::insert($dataStore);
        return redirect('storages')->with('mensaje', 'Almacen Agregado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(store $store)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($store_id)
    {
        //
        $store = store::findOrFail($store_id);
        return view('menu/config/edit_profile', compact('store')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $store_id)
    {
        //
        $validator = Validator::make($request->all(), [
            'store_id' => 'required|string|max:40',
            'name_store' => 'required|string|max:100',
            'address_store' => 'required|string|max:100',
            'incharge_store' => 'required|string|max:100',
            'phone' => 'required|string|max:100',
        ], [
            'required' => 'El campo :attribute es obligatorio.',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $dataProfile = request()->except(['_token', '_method']);
        store::where('store_id', '=', $store_id)->update($dataProfile);
        $store = store::findOrFail($store_id);
        return redirect('storages')->with('mensaje', 'Almacenes modificado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(store $store)
    {
        //
    }
}
