<?php

namespace App\Livewire\Clients;

use App\Models\Client;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class ClientList extends Component
{
    use WithPagination;
    ###
    #[Url(as: 'query')]
    public $query = '';
    public function render()
    {
        $clients = Client::latest()
            ->when(filled($this->query), function($query){
                $query->where('name', 'LIKE', '%' . $this->query . '%')
                      ->orWhere('contact', 'LIKE', '%' . $this->query . '%');
            })
            ->get(['id', 'name', 'contact']);
        return view('livewire.clients.client-list', [
            'clients' => $clients
        ]);
    }
}
