<?php

namespace App\View\Components;

use App\Models\Smile;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Smiles extends Component
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

        $items = Smile::limit(6)->get();
        return view('components.smiles', ["items" => $items]);
    }
}
