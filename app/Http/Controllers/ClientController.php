<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function __invoke()
    {
        return view('dashboard.clients');
    }
    public function create(){
        return view('client.create');
    }

}
