<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }
    public function __invoke(){
        return view('auth.register');
    }
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email'=> 'required',
            'password' => 'required|confirmed'
        ]);
        $user = [
            'name' => $request->name,
            'email'=> $request->email,
            'password' => Hash::make($request->password_confirmation)
        ];
        User::create($user);
        return redirect()->route('login');
    }

}
