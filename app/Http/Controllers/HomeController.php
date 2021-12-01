<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\User;
class HomeController extends Controller
{
    public function index()
    {
        $admin_type = null;
        $menu_categories = Category::whereNull('deleted_at')->get();
        $slides = Post::orderBy('id', 'desc')->limit(3)->get(); 
        $postdata = Post::orderBy('id', 'desc')->limit(6)->get();
      
        if(Auth::user()){
            $admin_type = User::find(Auth::user()->id)->admin_type;
        }

        return view('home.index', compact('menu_categories', 'slides', 'postdata', 'admin_type'));
    }

    public function heltes()
    {
        $admin_type = null;
        $menu_categories = Category::whereNull('deleted_at')->get();
        if(Auth::user()){
            $admin_type = User::find(Auth::user()->id)->admin_type;
        }
        return view('home.heltes', compact('menu_categories', 'admin_type'));
    }


    public function taniltsuulga()
    {
        $admin_type = null;
        $menu_categories = Category::whereNull('deleted_at')->get();
        if(Auth::user()){
            $admin_type = User::find(Auth::user()->id)->admin_type;
        }
        return view('home.taniltsuulga', compact('menu_categories', 'admin_type'));
    }
}