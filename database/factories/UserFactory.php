<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'account'=>$this->faker->unique()->userName,
            'pwd'=>'999999999',
            'real_name'=>$this->faker->unique()->name,
            'card_id'=>$this->faker->randomDigitNotNull,
            'avatar'=>$this->faker->imageUrl(),
//            'phone'=>$this->faker->unique()->phoneNumber,
            'nickname'=>$this->faker->userName,
            'add_ip'=>$this->faker->ipv4,
            'login_type'=>'wechat',
            'user_type'=>'routine'
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
