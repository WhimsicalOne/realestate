<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Subscription;
use Masmerise\Toaster\Toaster;
use Livewire\Attributes\Validate;

class SubscriptionForm extends Component
{

    #[Validate('required|email')]
    public $email = '';

    public function save() {
        $this->validate();

        Subscription::create([
            'email' => $this->email
        ]);

        Toaster::success('Yaay! You have subscribed!');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.subscription-form');
    }
}
