<?php

namespace App\Livewire\Clients\Create\Steps;

use Livewire\Component;
use Livewire\Attributes\Rule;
use Spatie\LivewireWizard\Components\StepComponent;

class PaymentStep extends StepComponent
{
    #[Rule('required')]
    public $initial_deposit;
    #[Rule('required')]
    public $weekly_deposit;
    #[Rule('required')]
    public $agreed_months;
    #[Rule('required')]
    public $total_weeks;
    #[Rule('required')]
    public $selling_price;
    #[Rule('required')]
    public $starting_week;
    #[Rule('required')]
    public $agreement_place;

    public function submit(){
        $this->validate();
        sleep(3);
        $this->nextStep();
    }
    public function render()
    {
        return view('livewire.clients.create.steps.payment-step');
    }
}
