<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected array $news;
    protected array $categories;

    protected function getCategories()
    {
        return $array = [
            'sport',
            'art',
            'fasion',
            'traveling',
            'digital'
        ];
    }

    protected function getNews()
    {
        $id = 1;
        $faker = Factory::create('ru_Ru');
        $categories = $this->getCategories();
        foreach ($categories as $category) {
            for ($i = 1; $i <= 5; $i++) {
                $this->news[] = [
                    'id' => $id,
                    'title' => "Новости $category $i",
                    'category' => $category,
                    'description' => $faker->text(150)
                ];
                $id++;
            }
        }

        return $this->news;
    }

    protected function getCategoryNews($category)
    {
        $news = $this->getNews();
        foreach ($news as $new) {
            if ($new['category'] == $category) {
                $newsList[] = $new;
            }
        }

        return $newsList;
    }

    protected function getNew($id) {
        $news = $this->getNews();
        foreach($news as $new) {
            if ($new['id'] == $id) {
                return $new;
            }
        }
    }
}
