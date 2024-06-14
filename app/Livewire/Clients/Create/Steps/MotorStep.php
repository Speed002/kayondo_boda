<?php

namespace App\Livewire\Clients\Create\Steps;

use Livewire\Component;
use Livewire\Attributes\Rule;
use Spatie\LivewireWizard\Components\StepComponent;

class MotorStep extends StepComponent
{
    #[Rule('required')]
    public $type;
    #[Rule('required')]
    public $make;
    #[Rule('required')]
    public $registration;
    #[Rule('required')]
    public $color;
    #[Rule('required')]
    public $chasis;
    #[Rule('required')]
    public $engine;
    #[Rule('required')]
    public $condition;
    #[Rule('required')]
    public $registered_names;

    public function submit(){
        $this->validate();
        sleep(3);
        $this->nextStep();
    }
    public function render()
    {
        return view('livewire.clients.create.steps.motor-step');
    }
}
