<?php

namespace App\Livewire\Clients\Create\Steps;

use Livewire\Component;
use Livewire\Attributes\Rule;
use Spatie\LivewireWizard\Components\StepComponent;

class RefereeStep extends StepComponent
{
    #[Rule('required')]
    public $referee1_name;
    #[Rule('required')]
    public $referee1_relationship;
    #[Rule('required')]
    public $referee1_contact;
    #[Rule('required')]
    public $referee2_name;
    #[Rule('required')]
    public $referee2_relationship;
    #[Rule('required')]
    public $referee2_contact;
    #[Rule('required')]
    public $st_chair_name;
    #[Rule('required')]
    public $st_chair_contact;
    #[Rule('required')]
    public $lc_chair_name;
    #[Rule('required')]
    public $lc_chair_contact;

    public function submit(){
        $this->validate();
        sleep(3);
        $this->nextStep();
    }
    public function render()
    {
        return view('livewire.clients.create.steps.referee-step');
    }
}
