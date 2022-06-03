<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required|unique:users,name',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:4'
        ]);
        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);

        auth()->login($user);

        return redirect('/index');
    }
}
