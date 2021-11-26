<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class HomeController extends Controller
{
    public function index()
    {
        $menu_categories = Category::whereNull('deleted_at')->get();
        return view('home.index', compact('menu_categories'));
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