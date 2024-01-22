<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response; // Import the Response class

use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::all();
        return view('admin.recipes.index', compact('recipes'));
    }
    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.recipes.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'preparation_time' => 'required|integer|min:1',
            'serving' => 'required|integer|min:1',
            'ingredients' => 'required|array|min:1',
            'ingredients.*' => 'required|string',
            'instructions' => 'required|array|min:1',
            'instructions.*' => 'required|string',
            'calories' => 'nullable|string',
            'total_fat' => 'nullable|string',
            'saturated_fat' => 'nullable|string',
            'cholesterol' => 'nullable|string',
            'sodium' => 'nullable|string',
            'potassium' => 'nullable|string',
            'total_carbohydrate' => 'nullable|string',
            'sugars' => 'nullable|string',
            'protein' => 'nullable|string',
            'categoryId' => 'required|exists:categories,id',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
    
        // Handle image upload
        $imagePath = $request->hasFile('image') ? $request->file('image')->store('recipe_images', 'public') : null;
    
        // Create a new recipe with the authenticated user's ID
        $recipe = new Recipe([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'preparation_time' => $request->input('preparation_time'),
            'serving' => $request->input('serving'),
            'ingredients' => json_encode($request->input('ingredients')),
            'instructions' =>json_encode($request->input('instructions')),
            'calories' => $request->input('calories'),
            'total_fat' => $request->input('total_fat'),
            'saturated_fat' => $request->input('saturated_fat'),
            'cholesterol' => $request->input('cholesterol'),
            'sodium' => $request->input('sodium'),
            'potassium' => $request->input('potassium'),
            'total_carbohydrate' => $request->input('total_carbohydrate'),
            'sugars' => $request->input('sugars'),
            'protein' => $request->input('protein'),
            'categoryId' => $request->input('categoryId'),
            'userId' => auth()->id(), // Set the user ID to the authenticated user's ID
            'image' => $imagePath,
        ]);
    
        // Save the recipe to the database
        // dd($recipe);
        $recipe->save();
    
        // Redirect or return a response
        return redirect()->route('recipes.index')->with('success', 'Recipe created successfully');
    }
    
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
