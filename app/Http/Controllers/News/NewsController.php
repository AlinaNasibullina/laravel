<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news($id)
    {
        $new = $this->getNew($id);
        return view('news.news', ['new' => $new]);
    } 
}
