<?php

namespace App\View\Components;

use Illuminate\View\Component;

class loading extends Component
{
    public $classSvg = 'w-6 h-6';
    public $classText = 'text-lg';

    public function __construct($classSvg , $classText)
    {
        $this->classText = $classText;
        $this->classSvg = $classSvg;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.loading');
    }
}
