<?php

namespace App\Http\Controllers;
use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Throwable;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datasale['sale'] = Sale::all();
        return view('menu/sells/Sale', $datasale);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menu/sells/create_sale');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_sale' => 'required|string|max:100',
            'user_id_sale' => 'required|string|max:100',
            'customer' => 'required|string|max:100',
            'employee' =>'required|string|max:100',
            'date' =>'required|date|max:100',
            'total' =>'required|numeric|max:100',

        ], [
            'required' => 'El campo :attribute es obligatorio.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $databill = request()->except('_token');
        Sale::insert($databill);
        return redirect('sale')->with('mensaje','Empleado agregado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_sale)
    {
        $sale = Sale::findOrFail($id_sale);
        return view('menu/sells/edit_sale', compact('sale'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_sale)
    {
        $validator = Validator::make($request->all(), [
            'id_sale' => 'required|string|max:100',
            'user_id_sale' => 'required|string|max:100',
            'customer' => 'required|string|max:100',
            'employee' =>'required|string|max:100',
            'date' =>'required|date|max:100',
            'total' =>'required|numeric|max:100',

        ], [
            'required' => 'El campo :attribute es obligatorio.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $datasale = request()->except(['_token','_method']);
       Sale::where('user_id','=',$id_sale)->update($datasale);
        $sale = Sale::findOrFail($id_sale);
        return redirect('users')->with('mensaje', 'Usuario modificado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_sale)
    {
        try {
            Sale::destroy($id_sale);
        } catch (Throwable $th) {
            dd($th);
        }

        // echo"$id_sale";
        return redirect('sale')->with('mensaje','Usuario borrado');
    }
}
