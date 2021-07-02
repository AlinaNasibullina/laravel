<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category.index', [
            'categoryList' => $this->getCategories()
        ]);
    }

    public function category(string $name)
    {
        $categoryNews = $this->getCategoryNews($name);
        return view('category.category', [
            'categoryName' => $name,
            'categoryNews' => $categoryNews
        ]);
    }
}
