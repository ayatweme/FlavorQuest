<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubscriptionPlan;
use App\Models\User;


class SubscriptionController extends Controller
{
    public function subscribe(Request $request, SubscriptionPlan $plan)
    {
        // Check if the user is authenticated
        if (auth()->check()) {
            // Update the user's subscription plan in the database
            $user = auth()->user();
            $plans=$plan->id;
            $user= User::updateUserSubscriptionPlan($plans);

            // $user->updateUserSubscriptionPlan($plan->id);

            return redirect()->route('dashboard')->with('success', 'Subscription successful!');
        }

        // Redirect to the login page with an error message if the user is not authenticated
        return redirect()->route('login')->with('error', 'Please log in to subscribe.');
    }
}