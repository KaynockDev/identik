<?php

namespace App\View\Components;

use App\Models\Treatment;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Treatments extends Component
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
        $items = Treatment::limit(6)->get();

        return view('components.treatments', ["items" => $items]);
    }
}
