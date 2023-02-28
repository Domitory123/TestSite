<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MerchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title"=>$this->faker->word,
            "describe"=>$this->faker->sentence(2),
             "nameMainPhoto"=>'Photo1',
             "namePhoto1"=>'Photo2',
             "namePhoto2"=>'Photo3',
        ];
    }
}
