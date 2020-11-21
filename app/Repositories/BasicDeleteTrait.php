<?php

namespace App\Repositories;

trait BasicDeleteTrait
{
    protected abstract function getModel();

    public function delete($modelOrId)
    {
        $model = null;
        $deleted = false;
        $instance = $this->getModel();

        if ($modelOrId instanceof $instance) {
            $model = $modelOrId;
        }

        if (\is_numeric($modelOrId) && (int) $modelOrId > 0) {
            $model = $this->getModel()::find($modelOrId);
        }

        if (!empty($model)) {
            $deleted = $model->delete();
        }

        return $deleted;
    }
}