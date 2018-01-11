<?php

use Illuminate\Database\Seeder;



class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('pl_PL');

        for($i = 0; $i < 100; $i++) {
            $category = new \App\Category();
            $category->name = $faker->firstNameFemale();
            $category->save();
        }
    }
}
