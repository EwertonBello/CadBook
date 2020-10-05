<?php

namespace App\View\Components\layouts;

use Illuminate\View\Component;

class TopBarComponent extends Component
{
    public $title;

    public function __construct($title)
    {
       $this->title = $title;
    }

    public function render()
    {
        return view('components.top-bar');
    }
}
