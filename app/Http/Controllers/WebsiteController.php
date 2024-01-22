<?php 
// app/Http/Controllers/WebsiteController.php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;
use App\Models\Comment;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        
        $limit_categories = Category::orderBy('name')->limit(6)->get();

        $recipes = Recipe::latest()->take(5)->get();
        $comments = Comment::latest()->take(10)->get();
// dd($limit_categories);
        return view('welcome', ['limitCategories'=>$limit_categories,'categories'=>$categories, 'recipes'=>$recipes, 'comments'=>$comments ]);
        }
    }

    // Add more methods for other sections of your website

