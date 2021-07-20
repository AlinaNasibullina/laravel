<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert($this->getNews());
    }

    private function getNews()
    {
        $faker = Factory::create('ru_RU');

        $data = [];
        for ($i = 0; $i < 50; $i++) {
            $data[] = [
                'newsTitle' => $faker->realText(rand(50, 100)),
                'news_category' => $faker->numberBetween(1, 5),
                'news_content' => $faker->realText(rand(100, 200)),
                'news_img' => $faker->imageUrl()
            ];
        }
       
        return $data;
    }
}
