<?php

namespace App\Livewire\Clients;

use Livewire\Component;

class ClientItem extends Component
{
    public $client;
    public function render()
    {
        return view('livewire.clients.client-item', ['client' => $this->client]);
    }
}
