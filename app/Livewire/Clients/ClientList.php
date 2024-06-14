<?php

namespace App\Livewire\Clients;

use App\Models\Client;
use Livewire\Component;

class ClientList extends Component
{
    public function render()
    {
        $clients = Client::latest()->get();
        return view('livewire.clients.client-list', ['clients' => $clients]);
    }
}
