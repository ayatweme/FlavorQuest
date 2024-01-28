<?php

namespace App\Http\Controllers;
use App\Models\SubscriptionPlan;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    //
    public function index()
    {
        $plans = SubscriptionPlan::all();
        return view('pricing.index', compact('plans'));
    }
}
