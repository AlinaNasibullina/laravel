<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSourcesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news_sources')->insert($this->getData());
    }

    private function getData()
    {
        $data = [];
        for ($i = 1; $i <= 50; $i++) {
            $data[] = [
                'id_news' => $i,
                'id_sources' => (rand(1, 15))
            ];
        }

        return $data;
    }
}
