<?php

namespace App\Livewire\Clients\Create\Steps;

use App\Models\Motor;
use App\Models\Client;
use App\Models\Payment;
use App\Models\Referee;
use Livewire\Component;
use Spatie\LivewireWizard\Components\StepComponent;

class FinalStep extends StepComponent
{
    public function stateToStore(){
        return collect($this->state()->all())
        ->mapWithKeys(fn ($item) => $item)
        ->only(
            'name',
            'dob',
            'contact',
            'nin',
            'residence',
            'occupation',
            'stage',
            'doa',
            'father',
            'father_contact',
            'mother',
            'mother_contact',

            'type',
            'make',
            'registration',
            'color',
            'chasis',
            'engine',
            'condition',
            'registered_names',

            'initial_deposit',
            'weekly_deposit',
            'agreed_months',
            'total_weeks',
            'selling_price',
            'starting_week',
            'agreement_place',

            'referee1_name',
            'referee1_relationship',
            'referee1_contact',
            'referee2_name',
            'referee2_relationship',
            'referee2_contact',
            'st_chair_name',
            'st_chair_contact',
            'lc_chair_name',
            'lc_chair_contact',
             )
        ->toArray();
    }

    public function submit(){
        sleep(3);
        $client = Client::create([
            'name' => $this->state()->forStep('clients.create.steps.personal-step')['name'],
            'dob' => $this->state()->forStep('clients.create.steps.personal-step')['dob'],
            'contact' => $this->state()->forStep('clients.create.steps.personal-step')['contact'],
            'nin' => $this->state()->forStep('clients.create.steps.personal-step')['nin'],
            'residence' => $this->state()->forStep('clients.create.steps.personal-step')['residence'],
            'occupation' => $this->state()->forStep('clients.create.steps.personal-step')['occupation'],
            'stage' => $this->state()->forStep('clients.create.steps.personal-step')['stage'],
            'doa' => $this->state()->forStep('clients.create.steps.personal-step')['doa'],
            'father' => $this->state()->forStep('clients.create.steps.personal-step')['father'],
            'father_contact' => $this->state()->forStep('clients.create.steps.personal-step')['father_contact'],
            'mother' => $this->state()->forStep('clients.create.steps.personal-step')['mother'],
            'mother_contact' => $this->state()->forStep('clients.create.steps.personal-step')['mother_contact'],
        ]);
        // create motor
        Motor::create([
            'client_id' => $client->id,
            'type' => $this->state()->forStep('clients.create.steps.motor-step')['type'],
            'make' => $this->state()->forStep('clients.create.steps.motor-step')['make'],
            'registration' => $this->state()->forStep('clients.create.steps.motor-step')['registration'],
            'color' => $this->state()->forStep('clients.create.steps.motor-step')['color'],
            'chasis' => $this->state()->forStep('clients.create.steps.motor-step')['chasis'],
            'engine' => $this->state()->forStep('clients.create.steps.motor-step')['engine'],
            'condition' => $this->state()->forStep('clients.create.steps.motor-step')['condition'],
            'registered_names' => $this->state()->forStep('clients.create.steps.motor-step')['registered_names'],
        ]);
        // create payment
        Payment::create([
            'client_id' => $client->id,
            'initial_deposit' => $this->state()->forStep('clients.create.steps.payment-step')['initial_deposit'],
            'weekly_deposit' => $this->state()->forStep('clients.create.steps.payment-step')['weekly_deposit'],
            'agreed_months' => $this->state()->forStep('clients.create.steps.payment-step')['agreed_months'],
            'total_weeks' => $this->state()->forStep('clients.create.steps.payment-step')['total_weeks'],
            'selling_price' => $this->state()->forStep('clients.create.steps.payment-step')['selling_price'],
            'starting_week' => $this->state()->forStep('clients.create.steps.payment-step')['starting_week'],
            'agreement_place' => $this->state()->forStep('clients.create.steps.payment-step')['agreement_place'],
        ]);

        Referee::create([
            'client_id' => $client->id,
            'referee1_name' => $this->state()->forStep('clients.create.steps.referee-step')['referee1_name'],
            'referee1_relationship' => $this->state()->forStep('clients.create.steps.referee-step')['referee1_relationship'],
            'referee1_contact' => $this->state()->forStep('clients.create.steps.referee-step')['referee1_contact'],
            'referee2_name' => $this->state()->forStep('clients.create.steps.referee-step')['referee2_name'],
            'referee2_relationship' => $this->state()->forStep('clients.create.steps.referee-step')['referee2_relationship'],
            'referee2_contact' => $this->state()->forStep('clients.create.steps.referee-step')['referee2_contact'],
            'st_chair_name' => $this->state()->forStep('clients.create.steps.referee-step')['st_chair_name'],
            'st_chair_contact' => $this->state()->forStep('clients.create.steps.referee-step')['st_chair_contact'],
            'lc_chair_name' => $this->state()->forStep('clients.create.steps.referee-step')['lc_chair_name'],
            'lc_chair_contact' => $this->state()->forStep('clients.create.steps.referee-step')['lc_chair_contact'],
        ]);
        return redirect()->route('client.create')->with('client-created','Client successfully created');
    }
    public function render()
    {
        return view('livewire.clients.create.steps.final-step',  [
            'state' => $this->stateToStore()
        ]);
    }
}
