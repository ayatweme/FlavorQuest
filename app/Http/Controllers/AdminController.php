<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController  extends Controller
{
    //
    public function index()
    {
        // Your logic for the admin panel goes here
        return view('admin.admin'); // Replace with your actual view name
    }
}
