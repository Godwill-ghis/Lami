<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class UserSubscription extends Model
{

    protected $table = 'user_subscriptions';
    //
    protected $fillable = [
        'user_id',
        'subscription_id',
        'is_active',
        'limit_used',
        'stripe_customer_id',
        'stripe_subscription_id',
        'start_date',
        'end_date'
    ];

    public function user(): HasMany
    {
        return $this->hasMany(User::class);
    }

    protected $cast = [
        'is_active' => 'boolean',
    ];

    public function subscription(): BelongsTo
    {
        return $this->belongsTo(Subscription::class);
    }
}
