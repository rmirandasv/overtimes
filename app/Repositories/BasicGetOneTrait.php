<?php

namespace App\Repositories;

trait BasicGetOneTrait
{
    protected abstract function getModel();

    public function get($id) 
    {
        $model = null;

        if (\is_numeric($id) && $id > 0) {
            $model = $this->getModel()::find($modelOrId);
        }

        return $model;
    }
}