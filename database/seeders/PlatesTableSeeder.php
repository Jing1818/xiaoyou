<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Plate;

class PlatesTableSeeder extends Seeder
{
    public function run()
    {
        Plate::factory()->count(10)->create();
    }
}

