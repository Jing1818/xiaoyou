<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Follow;

class FollowPolicy extends Policy
{
    public function update(User $user, Follow $follow)
    {
        // return $follow->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Follow $follow)
    {
        return true;
    }
}
