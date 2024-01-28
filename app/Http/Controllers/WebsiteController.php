<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\User;

class WebsiteController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $limit_categories = Category::orderBy('name')->limit(6)->get();

        $recipes = Recipe::latest()->take(5)->get();
        $limit_recipes = Recipe::orderBy('id', 'desc')->limit(6)->with('user')->get(); // Change 'users' to 'user'
        $latestRecipes = Recipe::where('id', '>=', 8)
        ->orderBy('id', 'asc')
        ->take(24)
        ->get();
        $comments = Comment::latest()->take(10)->get();
        $totalComments = Comment::whereIn('recipe_id', $recipes->pluck('id'))->count();
        return view('welcome', [
            'limitCategories' => $limit_categories,
            'categories' => $categories,
            'recipes' => $recipes,
            'comments' => $comments,
            'limitRecipes' => $limit_recipes,
            'totalComments' => $totalComments,
            'latestRecipes'=>$latestRecipes
        ]);
        
    }

    public function category()
    {
        $categories = Category::all();
        return view('category', ['categories' => $categories]);
    }
    public function showFullRecipe($id)
{
    $recipe = Recipe::find($id);
    $comments = Comment::with('user')->where('recipe_id', $id)->take(10)->get();
    $totalComments = Comment::where('recipe_id', $id)->count();
    if (!$recipe) {
        abort(404); // or handle the case where the recipe is not found
    }

    return view('fullRecipes', ['recipe' => $recipe,'comments' => $comments,'totalComments' => $totalComments]);
}

    
    // The following method should be part of your Recipe model, not in the controller.
    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'userId');
    // }
}
