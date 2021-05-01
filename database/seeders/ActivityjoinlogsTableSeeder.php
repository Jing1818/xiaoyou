<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Activityjoinlog;

class ActivityjoinlogsTableSeeder extends Seeder
{
    public function run()
    {
        Activityjoinlog::factory()->count(10)->create();
    }
}

