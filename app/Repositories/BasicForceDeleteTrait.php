<?php

namespace App\Repositories;

trait BasicForceDeleteTrait
{
    protected abstract function getModel();

    public function forceDelete($modelOrId) 
    {
        $model = null;
        $deleted = false;
        $instance = new $this->getmodel();

        if ($modelOrId instanceof $instance) {
            $model = $modelOrId;
        }

        if (is_numeric($modelOrId) && (int) $modelOrId > 0) {
            $model = $this->getModel()::find($modelOrId);
        }

        if (!empty($model)) {
            $deleted = $model->forceDelete();
        }

        return $deleted;
    }
}