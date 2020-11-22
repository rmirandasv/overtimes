<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Navigation extends Component
{

    public $path;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(\Illuminate\Http\Request $request)
    {
        $this->path = \Str::finish($request->path(), '/');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.navigation');
    }

    public function isActive($option) 
    {
        $option = \Str::finish($option, '/');

        return \Str::startsWith($this->path, $option);
    }

}
