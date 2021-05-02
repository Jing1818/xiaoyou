<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        return [
            // $this->faker->name,
            'content'=>$this->faker->realTextBetween(100,500),
            'user_id'=>$this->faker->numberBetween(1,10),
            'topic_id'=>$this->faker->numberBetween(1,10),
            'activity_id'=>$this->faker->numberBetween(1,10),
            'reply_count'=>$this->faker->numberBetween(10,20),
            'view_count'=>$this->faker->numberBetween(100,200),
            'order'=>0,
            'like_count'=>$this->faker->numberBetween(100,200),
            'plate_id'=>$this->faker->numberBetween(1,10),
            'images'=>json_encode([
                $this->faker->imageUrl('200','200','cats'),
                $this->faker->imageUrl('200','200','cats'),
                $this->faker->imageUrl('200','200','cats'),
                $this->faker->imageUrl('200','200','cats'),
                $this->faker->imageUrl('200','200','cats'),
                $this->faker->imageUrl('200','200','cats'),
                $this->faker->imageUrl('200','200','cats'),


            ])

        ];
    }
}
