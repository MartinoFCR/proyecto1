<?php

namespace App\Http\Controllers;

use App\Models\transfers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TransfersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['transfers'] = transfers::all();
        return view('menu/storages/transfers', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('menu/storages/create_transfers');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'transfer_id' => 'required|string|max:40',
            'fecha_transfer' => 'required|date|before:tomorrow',
            'almacen' => 'required|string|max:100',
            'producto' => 'required|string|max:100',
            'cantidad' => 'required|string|max:100',
            'destino' => 'required|string|max:100',
            'estado' => 'required|string|max:100',
            'observaciones' => 'required|string|max:100',
        ], [
            'required' => 'El campo :attribute es obligatorio.',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $datatransfers = request()->except('_token');
        transfers::insert($datatransfers);
        return redirect('transfers')->with('mensaje', 'Traslado Agregado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(transfers $transfers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($transfer_id)
    {
        //
        $transtransfers =transfers::findOrFail($transfer_id);
        return view('menu/buys/edit_transfers', compact('transtransfers')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $transfer_id)
    {
        //
        $validator = Validator::make($request->all(),[
            'transfer_id' => 'required|string|max:40',
            'fecha_transfer' => 'required|date|before:tomorrow',
            'almacen' => 'required|string|max:100',
            'producto' => 'required|string|max:100',
            'cantidad' => 'required|string|max:100',
            'destino' => 'required|string|max:100',
            'estado' => 'required|string|max:100',
            'observaciones' => 'required|string|max:100',
        ], [
            'required' => 'El campo :attribute es obligatorio.',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $datasupplier = request()->except(['_token', '_method']);
        transfers::where('transfer_id', '=', $transfer_id)->update($datasupplier);
        $transfers = transfers::findOrFail($transfer_id);
        return redirect('transfers')->with('mensaje', 'Traslado modificado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($transfer_id)
    {
        //
        transfers::destroy($transfer_id);
        return redirect('transfers')->with('mensaje', 'Traslado eliminado con éxito');
    }
}
