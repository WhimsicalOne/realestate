<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FeaturedListings extends Component
{

    public $listings = [];
    /**
     * Create a new component instance.
     */
    public function __construct($listings)
    {
        $this->listings = $listings;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.featured-listings');
    }
}
