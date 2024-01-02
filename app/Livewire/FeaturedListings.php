<?php

namespace App\Livewire;

use App\Models\Listing;
use Livewire\Component;

class FeaturedListings extends Component
{
    public $featured_properties = [];

    public function mount() {
        $this->featured_properties = Listing::where('is_featured', 1)->take(5)->get();
    }

    public function render()
    {
        return view('livewire.featured-listings');
    }
}
