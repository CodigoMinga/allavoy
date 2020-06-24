<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function create()
    {
        return view('users.register');
    }
    public function store(Request $request)
    {
        User::create($request->all());

        return redirect()->route('index');
    }
    public function list()
    {
        return view('users.list', [
            'users' => User::latest()->paginate()

        ]);
    }
}
