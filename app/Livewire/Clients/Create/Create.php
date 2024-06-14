<?php

namespace App\Livewire\Clients\Create;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Livewire\Clients\Create\Steps\FinalStep;
use App\Livewire\Clients\Create\Steps\MotorStep;
use App\Livewire\Clients\Create\Steps\PaymentStep;
use App\Livewire\Clients\Create\Steps\RefereeStep;
use App\Livewire\Clients\Create\Steps\PersonalStep;
use Spatie\LivewireWizard\Components\WizardComponent;

class Create extends WizardComponent
{
    // #[On('created.client')]
    // public function refresh_component(){

    // }

    public function steps(): array
    {
        return [
            PersonalStep::class,
            MotorStep::class,
            PaymentStep::class,
            RefereeStep::class,
            FinalStep::class
        ];
    }
}
