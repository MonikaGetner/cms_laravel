<?php

use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('pl_PL');

        for($i = 0; $i < 20; $i++) {
            $article=new \App\Article();
            $article->title = $faker->colorName;
            $article->body = $faker->firstNameFemale;
            $article->author = $faker->company;
            $article->save();
        }

    }
}
