<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create()
    {
        return view('session.create');
    }

    public function store()
    {
        $data = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(auth()->attempt($data)){
            return redirect('/index');
        }
        return back()->withErrors(['email' => 'Invalid Email']);
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/');
    }
}
