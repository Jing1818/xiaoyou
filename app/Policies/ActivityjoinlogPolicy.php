<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Activityjoinlog;

class ActivityjoinlogPolicy extends Policy
{
    public function update(User $user, Activityjoinlog $activityjoinlog)
    {
        // return $activityjoinlog->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Activityjoinlog $activityjoinlog)
    {
        return true;
    }
}
