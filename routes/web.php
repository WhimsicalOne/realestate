<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Livewire\ShowCategoryListings;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::view('/', 'welcome')->name('home');

Route::get('/', [Controller::class, 'home'])->name('home');
Route::get('/search', [Controller::class, 'searchResults'])->name('search');

Route::get('/category/{category:name}', ShowCategoryListings::class)->name('category.single');
