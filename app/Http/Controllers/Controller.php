<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected array $news;
    protected array $categories;

    protected function getCategories()
    {
        $this->categories = DB::select('SELECT id, category_name FROM category');
        return $this->categories;

    }

    protected function getNews()
    {
        $this->news = DB::select('SELECT id, newsTitle, created_at FROM news');


        return $this->news;
    }

    protected function getCategoryNews($categoryName)
    {
 
        $categoryId = null;
        $categoryList = $this->getCategories();
        foreach($categoryList as $category){
            if($category->category_name == $categoryName) {
                $categoryId = $category->id;
                break;
            }
        }
        $newsList = DB::select(
            'SELECT 
                id, newsTitle, created_at, updated_at, news_content, news_img
            FROM news
            WHERE news_category = :categoryId',
            ['categoryId' => $categoryId]);


        return $newsList;
    }

    protected function getNewsVariable($id) {

        $variable = DB::select(
            'SELECT id, newsTitle, created_at, news_content, news_img
            FROM news
            WHERE id = :id',
            ['id' => $id]
        );
        return $variable;


    }
}
