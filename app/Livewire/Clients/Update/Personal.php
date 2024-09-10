<?php
namespace App\Livewire\Clients\Update;

use App\Models\Client;
use Livewire\Component;

class Personal extends Component
{
    public $client;

    protected $listeners = [
        'field-updated' => '$refresh'
    ];
    // Variables binded with the form input names
    public $name;
    public $dob;
    public $contact;
    public $nin;
    public $residence;
    public $occupation;
    public $stage;
    public $doa;
    public $father;
    public $father_contact;
    public $mother;
    public $mother_contact;

    // For toggling the update forms
    public $editing = [
        'name' => false,
        'dob' => false,
        'contact' => false,
        'nin' => false,
        'residence' => false,
        'occupation' => false,
        'stage' => false,
        'doa' => false,
        'father' => false,
        'father_contact' => false,
        'mother' => false,
        'mother_contact' => false,
    ];

    public function mount(Client $client)
    {
        $this->client = $client;
        // Bind model data to component properties
        $this->name = $client->name;
        $this->dob = $client->dob;
        $this->contact = $client->contact;
        $this->nin = $client->nin;
        $this->residence = $client->residence;
        $this->occupation = $client->occupation;
        $this->stage = $client->stage;
        $this->doa = $client->doa;
        $this->father = $client->father;
        $this->father_contact = $client->father_contact;
        $this->mother = $client->mother;
        $this->mother_contact = $client->mother_contact;
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

        $this->client->$field = $this->$field;
        $this->client->save();

        $this->toggleEditing($field);
        session()->flash('personal_message', ucfirst($field) . ' updated successfully.');
        // Dispatch an event to trigger JavaScript code
        // $this->dispatch('field-updated', ['field' => $field]);
        return redirect()->route('client.show', $this->client);
    }
    public function render()
    {
        return view('livewire.clients.update.personal');
    }
}
