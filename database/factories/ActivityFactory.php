<?php

namespace Database\Factories;

use App\Models\Activity;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActivityFactory extends Factory
{
    protected $model = Activity::class;

    public function definition()
    {
        return [
            // $this->faker->name,
            'activity_name'=>$this->faker->realTextBetween(10,20),
            'activity_desc'=>$this->faker->realTextBetween(100,200),
            'status'=>1,
            'start_time'=>time(),
            'end_time'=>time()+3600*24,
            'user_id'=>1,
            'is_admin'=>0,
            'cover'=>$this->faker->imageUrl()
        ];
    }
}
