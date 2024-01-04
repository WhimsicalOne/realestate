<?php

namespace App\Livewire;

use App\Models\Listing;
use Livewire\Component;
use App\Models\Category;

use Livewire\Attributes\Validate;

class FilterForm extends Component
{
    public $categories = [];
    public $amounts = [];

    public $term = '';
    public $category = '';
    public $min_price = '';
    public $max_price = '';


    public function mount() {
        $this->categories = Category::all();
        $this->amounts = Listing::orderBy('price', 'ASC')->select('price', 'id')->get();
    }

    public function filterListings() {

    }

    public function render()
    {
        return view('livewire.filter-form');
    }
}
