<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RecipeController;

use App\Http\Controllers\CategoryController;

use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\PricingController;
// web.php or routes/web.php

use App\Http\Controllers\SubscriptionController;

Route::post('/subscribe/{plan}', [SubscriptionController::class, 'subscribe'])->name('subscribe');

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
// routes/web.php

use App\Http\Controllers\CommentController;

Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');



Route::get('/', [WebsiteController::class, 'index'])->name('welcome');
Route::get('/category', [WebsiteController::class, 'category'])->name('category');
Route::get('/fullRecipes/{id}', [WebsiteController::class, 'showFullRecipe'])->name('fullRecipes');
Route::resource('categories', CategoryController::class);

// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/favorites', function () {
    return view('favorites');
})->name('favorites');
// Route::get('/fullRecipes', function () {
//     return view('fullRecipes');
// })->name('fullRecipes');

// Route::get('/all-category', function () {
//     return view('all-category');
// })->name('all-category');

Route::get('/admin', [AdminController::class, 'index'])->name('index');
Route::get('/admin', [RecipeController::class, 'index'])->name('index');
// routes/web.php
// routes/web.php
Route::get('/recipes/index', [RecipeController::class, 'index'])->name('recipes.index');

Route::get('/recipes/create', [RecipeController::class, 'create'])->name('recipes.create');
// routes/web.php

Route::resource('/recipes',  RecipeController::class);
// routes/web.php

Route::get('/pricing', [PricingController::class, 'index'])->name('pricing.index');

// Example route definition for registration page
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
// web.php or routes/web.php



require __DIR__.'/auth.php';
