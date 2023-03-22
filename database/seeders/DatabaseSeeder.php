<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Merch;
use App\Models\Category;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    
    public function run()
    {
       
       
        User::factory(1)->create();
        Category::factory(3)->create();
        Merch::factory(5)->create();

    }
}
