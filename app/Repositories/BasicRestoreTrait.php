<?php

namespace App\Repositories;

trait BasicRestoreTrait
{
    protected abstract function getModel();

    public function restore($modelOrId)
    {
        $model = null;
        $instance = new $this->getModel();
        $restored = false;

        if ($modelOrId instanceof $instance) {
            $model = $modelOrId;
        }

        if (\is_numeric($modelOrId) && (int) $modelOrId > 0) {
            $model = $this->getmodel()::find($modelOrId);
        }

        if (!empty($model)) {
            $restored = $model->restore();
        }

        return $restored;
    }
}