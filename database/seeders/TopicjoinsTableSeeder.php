<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Topicjoin;

class TopicjoinsTableSeeder extends Seeder
{
    public function run()
    {
        Topicjoin::factory()->count(10)->create();
    }
}

