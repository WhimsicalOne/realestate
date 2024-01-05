<?php

namespace App\Livewire;

use App\Models\Subscription;
use Livewire\Attributes\Validate;
use Livewire\Component;

class SubscriptionForm extends Component
{

    #[Validate('required|email')]
    public $email = '';

    public function save() {
        $this->validate();

        Subscription::create([
            'email' => $this->email
        ]);

        $this->dispatch('process-swall', ['type' => 'success']);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.subscription-form');
    }
}
