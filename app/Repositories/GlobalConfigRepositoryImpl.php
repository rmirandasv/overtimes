<?php

namespace App\Repositories;

use App\Models\OvertimeSetup;

class GlobalConfigRepositoryImpl implements GlobalConfigRepository
{
    public function all()
    {
        return OvertimeSetup::all();
    }

    public function updateGlobalConfig($data = [])
    {
        $loginAttempsUpdated = false;
        $isPublicUpdated = false;

        $isPublic = OvertimeSetup::find(1);
        $loginAttemps = OvertimeSetup::find(2);

        $loginAttemps->value = $data['login_attempts'];

        $loginAttempsUpdated = $loginAttemps->save();

        if (isset($data['public_overtimes'])) {
            $isPublic->value = 'T';
        } else {
            $isPublic->value = 'F';
        }

        $isPublicUpdated = $isPublic->save();

        return $loginAttempsUpdated;
    }

}