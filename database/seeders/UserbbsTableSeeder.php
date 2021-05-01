<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Userbb;

class UserbbsTableSeeder extends Seeder
{
    public function run()
    {
        Userbb::factory()->count(20)->create();
    }
}

