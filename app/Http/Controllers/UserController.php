<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class UserController extends Controller
{
    public function create()
    {
        return view('users.register');
    }
    public function store(Request $request)
    {
        //busca el rol seleccionado proveniente del request
        $rol  = Role::where('name', $request->rol)->first();
        $user = User::create($request->all());
        
        //asigna el rol encontrado al usuario
        $user->roles()->attach($rol);
        
        return redirect()->route('users.list');
    }
    public function list()
    {
        return view('users.list', [
            'users' => User::latest()->paginate()

        ]);
    }
}
