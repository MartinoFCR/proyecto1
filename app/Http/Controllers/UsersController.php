<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datauser['users'] = Users::all();
        return view('menu/config/users', $datauser);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menu/config/create_user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|string|max:100',
            'poassword_user' => 'required|string|max:100',
            'email' => 'required|string|max:100',
            'profile_id' =>'required|string|max:100',

        ], [
            'required' => 'El campo :attribute es obligatorio.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $datauser = request()->except('_token');
        User::insert($datauser);
        return redirect('users')->with('mensaje','Empleado agregado con éxito');
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
    public function edit($user_id)
    {
        $users = User::findOrFail($user_id);
        return view('menu/config/edit_user', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $user_id)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|string|max:100',
            'password_user' => 'required|string|max:100',
            'email' => 'required|string|max:100',
            'profile_id' => 'required|string|max:100',
            'email' => 'required|string|max:100',
        ], [
            'required' => 'El campo :attribute es obligatorio.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $datauser = request()->except(['_token','_method']);
        User::where('user_id','=',$user_id)->update($datauser);
        $user = User::findOrFail($user_id);
        return redirect('users')->with('mensaje', 'Usuario modificado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $user_id)
    {
        User::destroy($user_id);
        return redirect('users')->with('mensaje','Empleado borrado');
    }
}
