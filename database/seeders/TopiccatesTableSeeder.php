<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Topiccate;

class TopiccatesTableSeeder extends Seeder
{
    public function run()
    {
        Topiccate::factory()->count(10)->create();
    }
}

