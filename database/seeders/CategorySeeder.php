<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert($this->getStaticData());
    }

    private function getStaticData()
    {
        return [
            ['category_name' => 'sport'],
            ['category_name' => 'art'],
            ['category_name' => 'fasion'],
            ['category_name' => 'traveling'],
            ['category_name' => 'digital']
        ];
    }
}
