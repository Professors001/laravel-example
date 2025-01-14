<?php

namespace App\View\Components\Abouts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Project extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public array $project,
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.abouts.project');
    }
}
