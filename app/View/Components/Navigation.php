<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navigation extends Component
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
        $items = [
            [
                "name" => __("Tedavilerimiz"),
                "route" => "/#tedavilerimiz"
            ],
            [
                "name" => __("Doktorlarımız"),
                "route" => "/#doktorlarimiz"
            ],
            [
                "name" => __("Gülüşlerimiz"),
                "route" => "/#guluslerimiz"
            ],
            [
                "name" => __("Hakkımızda"),
                "route" => "/#hakkimizda"
            ],
            [
                "name" => __("SSS"),
                "route" => "/#sss"
            ],
            [
                "name" => __("İletişim"),
                "route" => "/#iletisim"
            ],

        ];

        return view('components.navigation', ["items" => $items]);
    }
}
