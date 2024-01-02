<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoryListing extends Component
{

    public $category_listings = [];

    public function mount()
    {
        $this->category_listings = Category::all();
    }

    public function render()
    {
        return view('livewire.category-listing');
    }
}
