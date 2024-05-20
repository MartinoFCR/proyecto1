<?php

namespace App\Http\Controllers;

use App\Models\customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['customers'] = customers::all();
        return view('menu/sells/clients', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('menu/sells/create_clients');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'id' => 'required|string|max:100',
            'name_customer' => 'required|string|max:100',
            'lastname_customer' => 'required|string|max:100',
            'phone' => 'required|string|max:100',
            'city' => 'required|string|max:100',
            'date' => 'required|date||before:tomorrow',
        ], [
            'required' => 'El campo :attribute es obligatorio.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $datacustomer = request()->except('_token');
        customers::insert($datacustomer);
        return redirect('clients')->with('mensaje','Cliente agregado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(customers $customers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $customers = customers::findOrFail($id);
        return view('menu/sells/edit_clients', compact('customers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, customers $customers)
    {
        //
        $validator = Validator::make($request->all(), [
            'id' => 'required|string|max:100',
            'name_customer' => 'required|string|max:100',
            'lastname_customer' => 'required|string|max:100',
            'phone' => 'required|string|max:100',
            'city' => 'required|string|max:100',
            'date' => 'required|date||before:tomorrow',
        ], [
            'required' => 'El campo :attribute es obligatorio.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $datacustomer = request()->except(['_token','_method']);
        customers::where('id','=',$request->id)->update($datacustomer);
        $customers = customers::findOrFail($request->id);
        return redirect('clients')->with('mensaje', 'Cliente modificado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        customers::destroy($id);
        return redirect('clients')->with('mensaje','Producto borrado');
    }
}
