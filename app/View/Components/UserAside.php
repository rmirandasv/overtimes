<?php

namespace App\View\Components;

use Illuminate\View\Component;

class UserAside extends Component
{

    protected $path;
    protected $userId;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(\Illuminate\Http\Request $request)
    {
        $this->path = $request->path();
        $this->userId = isset($request->userId) ? $request->userId : null;
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

    public function isEditing()
    {
        return 'users/' . $this->userId . '/edit' === $this->path;
    }

    public function isDeleting()
    {
        return 'users/' . $this->userId . '/delete' === $this->path;
    }
}
