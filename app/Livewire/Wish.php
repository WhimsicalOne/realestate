<?php

namespace App\Livewire;

use App\Models\Listing;
use Livewire\Component;
use App\Models\Wish as W;

class Wish extends Component
{
    public W $wish;
    public $listing;

    public function addToWishlist($listing) {
        $user = auth()->user();
        $user_wishes = $user->wishes()->where('listing_id', $listing)->get();

        if($user_wishes->count() === 0) {
            $user->wishes()->create([
                'listing_id' => $listing,
            ]);
            dd('Added.');
        } else {
            dd('This exists.');
        }


    }



    public function mount($listing = null)
    {
        $this->listing = $listing;
    }


    public function render()
    {
        return view('livewire.wish');
    }
}
