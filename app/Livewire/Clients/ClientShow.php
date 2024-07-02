<?php

namespace App\Livewire\Clients;

use App\Models\Client;
use Livewire\Component;
use Livewire\Attributes\On;

class ClientShow extends Component
{
    public $client;
    // Accept the initial data via the constructor
    public function mount(Client $client)
    {
        $this->client = $client;
    }

    public function render()
    {
        return view('livewire.clients.client-show');

    }
}
