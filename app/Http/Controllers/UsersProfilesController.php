<?php

namespace App\Http\Controllers;

use App\Models\users_profiles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UsersProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $dataProfile['user_profiles'] = users_profiles::all();
        return view('menu/config/user_profile', $dataProfile);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('menu/config/create_profiles');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'profile_id' => 'required|string|max:40',
            'name_profile' => 'required|string|max:100',
            'premissions' => 'required|string|max:100',
        ], [
            'required' => 'El campo :attribute es obligatorio.',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $dataProfile = request()->except('_token');
        users_profiles::insert($dataProfile);
        return redirect('user_profile')->with('mensaje', 'Perfil de Usuario Agregado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(users_profiles $users_profiles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($profile_id)
    {
        //
        $users_profiles = users_profiles::findOrFail($profile_id);
        return view('menu/config/edit_profile', compact('users_profiles')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $profile_id)
    {
        //
        $validator = Validator::make($request->all(), [
            'profile_id' => 'required|string|max:40',
            'name_profile' => 'required|string|max:100',
            'premissions' => 'required|string|max:100',
        ], [
            'required' => 'El campo :attribute es obligatorio.',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $dataProfile = request()->except(['_token', '_method']);
        users_profiles::where('profile_id', '=', $profile_id)->update($dataProfile);
        $users_profiles = users_profiles::findOrFail($profile_id);
        return redirect('user_profile')->with('mensaje', 'Perfil de usuario modificado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($profile_id)
    {
        //
        users_profiles::destroy($profile_id);
        return redirect('users_profiles')->with('mensaje', 'Perfil de usuario eliminado con éxito');
    }
}
