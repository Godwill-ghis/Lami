<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
        'start_date',
        'end_date'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function subscription(): HasOne
    {
        return $this->hasOne(Subscription::class);
    }
}
