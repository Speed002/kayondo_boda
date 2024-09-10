<?php

namespace App\Livewire\Clients\Update;

use App\Models\Client;
use Livewire\Component;

class Payment extends Component
{
    public Client $client;

    protected $listeners = [
        'field-updated' => '$refresh'
    ];
    public $initial_deposit;
    public $weekly_deposit;
    public $agreed_months;
    public $total_weeks;
    public $selling_price;
    public $starting_week;
    public $agreement_place;
    // For toggling the update forms
    public $editing = [
        'initial_deposit' => false,
        'weekly_deposit' => false,
        'agreed_months' => false,
        'total_weeks' => false,
        'selling_price' => false,
        'starting_week' => false,
        'agreement_place' => false
    ];
    public function mount(Client $client)
    {
        $this->client = $client;
        // Bind model data to component properties
        $this->initial_deposit = $client->payment->initial_deposit ?? '';
        $this->weekly_deposit = $client->payment->weekly_deposit ?? '';
        $this->agreed_months = $client->payment->agreed_months ?? '';
        $this->total_weeks = $client->payment->total_weeks ?? '';
        $this->selling_price = $client->payment->selling_price ?? '';
        $this->starting_week = $client->payment->starting_week ?? '';
        $this->agreement_place = $client->payment->agreement_place ?? '';
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
        if ($this->client->payment) {
            $this->client->payment->$field = $this->$field;
            $this->client->payment->save();
        }
        $this->toggleEditing($field);
        session()->flash('payment_message', ucfirst(str_replace('_', ' ', $field)) . ' updated successfully.');
        // Dispatch an event to trigger JavaScript code
        // $this->dispatch('field-updated', ['field' => $field]);
        return redirect()->route('client.show', $this->client);
    }
    public function render()
    {
        return view('livewire.clients.update.payment');
    }
}
