<?php

namespace App\Repositories;

trait BasicInsertTrait
{
    protected abstract function getModel();

    public function add($data = [])
    {
        return $this->getModel()::create($data);
    }
}