<?php

namespace App\Http\Controllers\Customer;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
class CustomerNewsController extends Controller
{
    public function show($news_id)
    {
        $menu_categories = Category::whereNull('deleted_at')->get();
        $news = Post::find($news_id);
        return view('home.news.index', compact('menu_categories', 'news'));
    }
}