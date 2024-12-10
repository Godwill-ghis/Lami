<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Subscription extends Model
{
    //
    use HasUuids;
    protected $fillable = [
        'name',
        'price',
        'duration_unit',
        'limit'
    ];

    public function userSubscriptions(): BelongsToMany
    {
        return $this->belongsToMany(UserSubscription::class);
    }
}
