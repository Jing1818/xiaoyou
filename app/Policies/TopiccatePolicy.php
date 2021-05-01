<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Topiccate;

class TopiccatePolicy extends Policy
{
    public function update(User $user, Topiccate $topiccate)
    {
        // return $topiccate->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Topiccate $topiccate)
    {
        return true;
    }
}
