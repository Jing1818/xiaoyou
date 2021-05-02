<?php

namespace Database\Factories;

use App\Models\Follow;
use Illuminate\Database\Eloquent\Factories\Factory;

class FollowFactory extends Factory
{
    protected $model = Follow::class;

    public function definition()
    {
        return [
            // $this->faker->name,
            'user_id'=>$this->faker->unique()->numberBetween(2,20),
            'follow_user_id'=>1
        ];
    }
}
