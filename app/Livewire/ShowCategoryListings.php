<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Listing;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\WithPagination;

class ShowCategoryListings extends Component
{
    use WithPagination;

    public Category $category;

    public function mount(Category $category) {
        $this->category = $category;
    }

    public function render()
    {
        return view('livewire.show-category-listings', [
            'listings' => Listing::where('category_id', $this->category->id)->paginate(20),
            'background' => asset('images/categories/' . strtolower($this->category->name) .  '.jpg')
        ])->title('Hii');
    }
}
