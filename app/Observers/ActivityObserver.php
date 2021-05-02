<?php

namespace App\Observers;

use App\Models\Activity;
use Illuminate\Support\Facades\Cache;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class ActivityObserver
{
    public function creating(Activity $activity)
    {
        //
    }

    public function updating(Activity $activity)
    {
        //
    }
    public function saved(Activity $activity){
        Cache::forget()
    }
}
