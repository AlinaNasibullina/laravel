<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SourcesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sources')->insert($this->getData());
    }

    private function getData()
    {
        $faker = Factory::create('ru_RU');

        $data = [];
        for ($i = 0; $i < 15; $i++) {
            $data[] = ['path_to_source' => $faker->url];
        }
        return $data;
    }
}
