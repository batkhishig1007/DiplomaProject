<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\post;
class HomeController extends Controller
{
    public function index()
    {
        $menu_categories = Category::whereNull('deleted_at')->get();
        $slides = Post::orderBy('id', 'desc')->limit(3)->get();
      
        return view('home.index', compact('menu_categories', 'slides'));
    }

    public function heltes()
    {
        $menu_categories = Category::whereNull('deleted_at')->get();
        return view('home.heltes', compact('menu_categories'));
    }


    public function taniltsuulga()
    {
        $menu_categories = Category::whereNull('deleted_at')->get();
        return view('home.taniltsuulga', compact('menu_categories'));
    }
}