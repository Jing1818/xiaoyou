<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Topicjoin;

class TopicjoinPolicy extends Policy
{
    public function update(User $user, Topicjoin $topicjoin)
    {
        // return $topicjoin->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Topicjoin $topicjoin)
    {
        return true;
    }
}
