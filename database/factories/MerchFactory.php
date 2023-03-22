<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

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
             "name_main_photo"=>'Photo1',
             "name_photo_1"=>'Photo2',
             "name_photo_2"=>'Photo3',
             "сategory_id"=>Category::get()->random()->id,
        ];
    }
}
