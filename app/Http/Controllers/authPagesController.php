<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authPagesController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }
    public function __invoke(){
        return view('auth.login');
    }
    public function password_reset(){
        return view('auth.forgot-password');
    }
}
