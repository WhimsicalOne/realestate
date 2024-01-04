<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SubHero extends Component
{
    public $title = '';
    public $background = '';

    /**
     * Create a new component instance.
     */
    public function __construct($title, $background)
    {
        $this->title = $title;
        $this->background = $background;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sub-hero');
    }
}
