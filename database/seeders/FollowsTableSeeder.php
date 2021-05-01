<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Follow;

class FollowsTableSeeder extends Seeder
{
    public function run()
    {
        Follow::factory()->count(10)->create();
    }
}

