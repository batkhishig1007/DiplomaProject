<?php

namespace App\Http\Controllers\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\User;
class CustomerNewsController extends Controller
{
    public function show($news_id)
    {
        $admin_type = null;
        $menu_categories = Category::whereNull('deleted_at')->get();
        $news = Post::find($news_id);


       if(Auth::user()){
            $admin_type = User::find(Auth::user()->id)->admin_type;
        }
        return view('home.news.index', compact('menu_categories', 'news', 'admin_type'));
    }
}