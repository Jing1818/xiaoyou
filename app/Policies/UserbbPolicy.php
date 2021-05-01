<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Userbb;

class UserbbPolicy extends Policy
{
    public function update(User $user, Userbb $userbb)
    {
        // return $userbb->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Userbb $userbb)
    {
        return true;
    }
}
