<?php

namespace App\Http\Controllers\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\User;
class CustomerNewsCategoryController  extends Controller
{
    public function index()
    {
        $admin_type = null;
        $menu_categories = Category::whereNull('deleted_at')->get();
        $data = Post::with('user')->paginate(15);
        $category_id = null;

        if(Auth::user()){
            $admin_type = User::find(Auth::user()->id)->admin_type;
        }
        return view('home.news_category.index',compact('menu_categories', 'data', 'category_id', 'admin_type'))->with('i', (request()->input('page', 1) - 1) * 15);
    }

    public function show($id)
    {
        $admin_type = null;
        $menu_categories = Category::whereNull('deleted_at')->get();
        $category_id = $id;
        $data = Post::with('user')->where('category_id', $id)->paginate(9);

        if(Auth::user()){
            $admin_type = User::find(Auth::user()->id)->admin_type;
        }
        return view('home.news_category.index',compact('menu_categories', 'data','category_id',  'admin_type'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}