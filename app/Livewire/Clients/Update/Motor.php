<?php

namespace App\Livewire\Clients\Update;

use App\Models\Client;
use Livewire\Component;

class Motor extends Component
{
    public Client $client;

    protected $listeners = [
        'field-updated' => '$refresh'
    ];

    public $type;
    public $make;
    public $registration;
    public $color;
    public $chasis;
    public $engine;
    public $condition;
    public $registered_names;

    // For toggling the update forms
    public $editing = [
        'type' => false,
        'make' => false,
        'registration' => false,
        'color' => false,
        'chasis' => false,
        'engine' => false,
        'condition' => false,
        'registered_names' => false
    ];

    public function mount(Client $client)
    {
        $this->client = $client;

        if ($client->motor) {
            // Bind model data to component properties
            $this->type = $client->motor->type;
            $this->make = $client->motor->make;
            $this->registration = $client->motor->registration;
            $this->color = $client->motor->color;
            $this->chasis = $client->motor->chasis;
            $this->engine = $client->motor->engine;
            $this->condition = $client->motor->condition;
            $this->registered_names = $client->motor->registered_names;
        }
    }

    public function toggleEditing($field)
    {
        $this->editing[$field] = !$this->editing[$field];
    }

    public function update($field)
    {
        $this->validate([
            $field => 'required|string|max:255',
        ]);

        if ($this->client->motor) {
            $this->client->motor->$field = $this->$field;
            $this->client->motor->save();
        }

        $this->toggleEditing($field);
        session()->flash('message', ucfirst($field) . ' updated successfully.');
        // Dispatch an event to trigger JavaScript code
        $this->dispatch('field-updated', ['field' => $field]);
    }

    public function render()
    {
        return view('livewire.clients.update.motor');
    }
}
