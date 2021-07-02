<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\News\CategoryController;
use App\Http\Controllers\News\NewsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/{name}', [CategoryController::class, 'category'])
  ->where('name', '\w+');
Route::get('category/news/{id}', [NewsController::class, 'news'])
  ->where('id', '\d+')
  ->name('news');

// Route::get("/hi/{name}", functin (string $name) {
//     return "Hello, {$name}";
// });




Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});