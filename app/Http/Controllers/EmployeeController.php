<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $dataemployee['employees'] = employee::all();
        return view('menu/config/employees', $dataemployee);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('menu/config/create_employees');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'employees_id' => 'required|string|max:100',
            'name_employees' => 'required|string|max:100',
            'lastname_employees' => 'required|string|max:100',
            'date' => 'required|date||before:tomorrow',
            'email' => 'required|string|max:100',
        ], [
            'required' => 'El campo :attribute es obligatorio.',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $dataemployee = request()->except('_token');
        employee::insert($dataemployee);
        return redirect('employees')->with('mensaje','Empleado agregado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($employees_id)
    {
        //
        $employees = employee::findOrFail($employees_id);
        return view('menu/config/edit_employees', compact('employees'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $employees_id)
    {
        //
        $validator = Validator::make($request->all(), [
            'employees_id' => 'required|string|max:100',
            'name_employees' => 'required|string|max:100',
            'lastname_employees' => 'required|string|max:100',
            'date' => 'required|date||before:tomorrow',
            'email' => 'required|string|max:100',
        ], [
            'required' => 'El campo :attribute es obligatorio.',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $dataemployee = request()->except(['_token','_method']);
        employee::where('employees_id','=',$employees_id)->update($dataemployee);
        $employee = employee::findOrFail($employees_id);
        return redirect('employees')->with('mensaje', 'Empleado modificado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($employees_id)
    {
        //
        employee::destroy($employees_id);
        return redirect('employees')->with('mensaje','Empleado borrado');
    }
}
