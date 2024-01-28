<?php 
namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Cashier\Billable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        // Add any additional fields here that you want to be mass assignable
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Relationship with SubscriptionPlan.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subscriptionPlan()
    {
        return $this->belongsTo(SubscriptionPlan::class);
    }

    /**
     * Check if the user is subscribed.
     *
     * @return bool
     */
    public function subscribed()
    {
        // You may want to implement logic based on your application's requirements.
        // For example, check if the user has an active subscription.
        return $this->subscription_plan_id !== null;
    }

    /**
     * Update user's subscription plan.
     *
     * @param int $planId
     * @return void
     */
    public function updateUserSubscriptionPlan($planId)
    {
        $this->update(['subscription_plan_id' => $planId]);
    }
}
