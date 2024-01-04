<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function home() {
        $categories = Category::all(); // Where Featured is true, display the featured categories, but only show the first five.
        return view('pages.home', compact('categories'));
    }

    public function searchResults() {
        $title = 'Search Results';
        $background = asset('images/01.jpg');
        return view('pages.search', compact('title', 'background'));
    }
}
