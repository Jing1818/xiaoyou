<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Plate;

class PlatePolicy extends Policy
{
    public function update(User $user, Plate $plate)
    {
        // return $plate->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Plate $plate)
    {
        return true;
    }
}
