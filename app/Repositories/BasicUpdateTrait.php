<?php

namespace App\Repositories;

trait BasicUpdateTrait
{
    protected abstract function getModel();

    public function update($modelOrId, $data = [])
    {
        $model = null;
        $modelInstance = new $this->getModel();

        if ($modelOrId instanceof $modelInstance) {
            $model = $modelInstance;
        }

        if (\is_numeric($modelOrId) && (int) $modelOrId > 0) {
            $model = $this->getmodel()::find($modelOrId);
        }

        return $model->update($data);
    }

}