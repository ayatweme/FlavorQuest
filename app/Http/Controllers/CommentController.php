<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'comment' => 'required',
            'recipe_id' => 'required|exists:recipes,id',
            
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        // dd($request);
        $comment = new Comment([
            'comment' => $request->input('comment'),
            'user_id' => auth()->id(),
            'recipe_id' => $request->input('recipe_id'),
        ]);
    
        // Save the recipe to the database
        // dd($recipe);
        $comment->save();
    
        // Redirect or return a response
        return redirect()->back()->with('success', 'Comment posted successfully');
        

    }
}
