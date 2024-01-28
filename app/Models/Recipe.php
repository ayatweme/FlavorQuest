<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'preparation_time',
        'serving',
        'ingredients',
        'instructions',
        'calories',
        'total_fat',
        'saturated_fat',
        'cholesterol',
        'sodium',
        'potassium',
        'total_carbohydrate',
        'sugars',
        'protein',
        'categoryId', // Foreign key for category
        'userId', // Foreign key for user
        'image', // Newly added image column
    ];
    // In the Recipe model (app/Models/Recipe.php)
public function user()
{
    return $this->belongsTo(User::class, 'userId');
}
public function comments()
{
    return $this->hasMany(Comment::class, 'recipe_id');
}

}
