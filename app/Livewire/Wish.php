<?php

namespace App\Livewire;

use App\Models\Listing;
use Livewire\Component;
use App\Models\Wish as W;
use Masmerise\Toaster\Toaster;

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
            Toaster::success('Listing added to your wishlist.');
        } else {
            Toaster::error('This has been added already. Please try something else.');
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
