<?php

namespace App\View\Components;

use App\Models\Reel;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Instagram extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $items = Reel::limit(5)->orderByDesc("datetime")->get();
        return view('components.instagram', ["items" => $items]);
    }
}
