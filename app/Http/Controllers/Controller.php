<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Listing;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home() {
        $categories = Category::all();
        $listings = Listing::where('is_featured', 1)->get();
        return view('pages.home', compact('categories', 'listings'));
    }

    public function search() {
        $title = 'Search Results';
        $background = asset('images/01.jpg');
        return view('pages.search', compact('title', 'background'));
    }
}
