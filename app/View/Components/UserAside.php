<?php

namespace App\View\Components;

use Illuminate\View\Component;

class UserAside extends Component
{

    protected $path;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(\Illuminate\Http\Request $request)
    {
        $this->path = $request->path();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.user-aside');
    }

    public function isActive($option) 
    {
        return $this->path === $option;
    }
}
