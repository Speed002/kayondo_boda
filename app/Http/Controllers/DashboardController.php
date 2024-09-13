<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function __invoke()
    {
        $client_count = Client::all()->count();
        return view('dashboard.index', [
            'client_count' => $client_count
        ]);
    }
}
