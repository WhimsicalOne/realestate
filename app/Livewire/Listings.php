<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Listing;
use Livewire\Component;
use Livewire\WithPagination;

class Listings extends Component
{
    use WithPagination;

    public $category;

    public function mount($category = null) {
        if(!is_null($category)) {
            $this->category = $category;
        }
    }

    private function categoryWithListings() {
        return Category::find($this->category)->listings()->paginate(20);
    }

    private function results($term) {
        return Listing::where(function($q) use($term) {
            $q->search('name', $term)->search('address', $term)->search('zip', $term)->search('city', $term);
        })->paginate(20);
    }


    public function render()
    {
        return view('livewire.listings', [
            'listings' => request()->term ? $this->results(request()->term) : $this->categoryWithListings(),
        ]);
    }
}
