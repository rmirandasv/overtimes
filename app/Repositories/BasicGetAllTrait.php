<?php

namespace App\Repositories;

trait BasicGetAllTrait
{
    protected abstract function getModel();

    public function all($data = [])
    {
        return $this->getModel()::all();
    }

}