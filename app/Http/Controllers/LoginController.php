<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }
    public function __invoke(){
        return view('auth.login');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required'
        ]);

        if(auth()->attempt($request->only('email','password'), $request->has('remember'))){
            return redirect()->route('dashboard');
        }else{
            // Authentication failed, redirect back with an error message
            return redirect()->back()->withErrors([
                'email' => 'These credentials do not match our records.',
            ]);
        }

    }
}
