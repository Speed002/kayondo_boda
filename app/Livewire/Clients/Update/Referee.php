<?php

namespace App\Livewire\Clients\Update;

use App\Models\Client;
use Livewire\Component;

class Referee extends Component
{
    public Client $client;

    protected $listeners = [
        'field-updated' => '$refresh'
    ];

    public $referee1_name;
    public $referee1_relationship;
    public $referee1_contact;
    public $referee2_name;
    public $referee2_relationship;
    public $referee2_contact;
    public $st_chair_name;
    public $st_chair_contact;
    public $lc_chair_name;
    public $lc_chair_contact;

    // For toggling the update forms
    public $editing = [
        'referee1_name' => false,
        'referee1_relationship' => false,
        'referee1_contact' => false,
        'referee2_name' => false,
        'referee2_relationship' => false,
        'referee2_contact' => false,
        'st_chair_name' => false,
        'st_chair_contact' => false,
        'lc_chair_name' => false,
        'lc_chair_contact' => false
    ];

    public function mount(Client $client)
    {
        $this->client = $client;

        if ($client->referee) {
            // Bind model data to component properties
            $this->referee1_name = $client->referee->referee1_name ?? '';
            $this->referee1_relationship = $client->referee->referee1_relationship ?? '';
            $this->referee1_contact = $client->referee->referee1_contact ?? '';
            $this->referee2_name = $client->referee->referee2_name ?? '';
            $this->referee2_relationship = $client->referee->referee2_relationship ?? '';
            $this->referee2_contact = $client->referee->referee2_contact ?? '';
            $this->st_chair_name = $client->referee->st_chair_name ?? '';
            $this->st_chair_contact = $client->referee->st_chair_contact ?? '';
            $this->lc_chair_name = $client->referee->lc_chair_name ?? '';
            $this->lc_chair_contact = $client->referee->lc_chair_contact ?? '';
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

        if ($this->client->referee) {
            $this->client->referee->$field = $this->$field;
            $this->client->referee->save();
        }

        $this->toggleEditing($field);
        session()->flash('referee_message', ucfirst(str_replace('_', ' ', $field)) . ' updated successfully.');
        // Dispatch an event to trigger JavaScript code
        // $this->dispatch('field-updated', ['field' => $field]);
        return redirect()->route('client.show', $this->client);
    }

    public function render()
    {
        return view('livewire.clients.update.referee');
    }
}
