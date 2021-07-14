<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news($id)
    {
        $variable = $this->getNewsVariable($id);
        return view('news.news', ['variable' => $variable]);
    } 
}
