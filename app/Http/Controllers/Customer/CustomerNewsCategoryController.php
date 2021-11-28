<?php

namespace App\Http\Controllers\Customer;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
class CustomerNewsCategoryController  extends Controller
{
    public function index()
    {
        $menu_categories = Category::whereNull('deleted_at')->get();
        $data = Post::with('user')->paginate(15);
        $category_id = null;
        return view('home.news_category.index',compact('menu_categories', 'data', 'category_id'))->with('i', (request()->input('page', 1) - 1) * 15);
    }

    public function show($id)
    {
        $menu_categories = Category::whereNull('deleted_at')->get();
        $category_id = $id;
        $data = Post::with('user')->paginate(9);
        return view('home.news_category.index',compact('menu_categories', 'data','category_id'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}