<?php
// app/Http/Controllers/RedirectController.php
namespace App\Http\Controllers;

class RedirectController extends Controller
{
    public function redirectToDashboard()
    {
        return redirect()->route('dashboard');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
