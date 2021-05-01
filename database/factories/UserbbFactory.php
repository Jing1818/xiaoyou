<?php

namespace Database\Factories;

use App\Models\Userbb;
use Illuminate\Database\Eloquent\Factories\Factory;
use function Sodium\increment;

class UserbbFactory extends Factory
{
    protected $model = Userbb::class;

    public function definition()
    {
        return [
            // $this->faker->name,
            'user_id'=>$this->faker->numberBetween(1,20),
            'post_count'=>$this->faker->numberBetween(100,200),
            'comment_count'=>$this->faker->numberBetween(100,200),
            'like_total'=>$this->faker->numberBetween(100,200),
            'follow_count'=>$this->faker->numberBetween(100,200),
            'fans_count'=>$this->faker->numberBetween(100,200)
        ];
    }
}
