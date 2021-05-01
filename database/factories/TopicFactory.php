<?php

namespace Database\Factories;

use App\Models\Topic;
use Illuminate\Database\Eloquent\Factories\Factory;

class TopicFactory extends Factory
{
    protected $model = Topic::class;

    public function definition()
    {
        return [
            // $this->faker->name,
            'cate_id'=>$this->faker->randomElement(array('1','2','3','4')),
            'topic_name'=>$this->faker->realText(20),
            'topic_desc'=>$this->faker->realTextBetween(100,200),
            'post_count'=>$this->faker->numberBetween(20,40),
            'member_count'=>$this->faker->numberBetween(20,80)
        ];
    }
}
