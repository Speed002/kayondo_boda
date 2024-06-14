<?php

namespace App\Livewire\Clients\Create\Steps;

use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Spatie\LivewireWizard\Components\StepComponent;

class PersonalStep extends StepComponent
{
    ###
    #[Rule('required')]
    public $name;
    #[Rule('required')]
    public $dob;
    #[Rule('required')]
    public $contact;
    #[Rule('required')]
    public $nin;
    #[Rule('required')]
    public $residence;
    #[Rule('required')]
    public $stage;
    #[Rule('required')]
    public $doa;
    #[Rule('required')]
    public $occupation;
    #[Rule('required')]
    public $father;
    #[Rule('required')]
    public $father_contact;
    #[Rule('required')]
    public $mother;
    #[Rule('required')]
    public $mother_contact;

    public function submit(){
        $this->validate();
        sleep(3);
        $this->nextStep();
    }
    public function render()
    {
        return view('livewire.clients.create.steps.personal-step');
    }
}
