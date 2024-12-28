<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subscription extends Model
{
    use HasFactory;
    //
    use HasUuids;
    protected $fillable = [
        'name',
        'price',
        'duration_unit',
        'limit'
    ];

    public function userSubscriptions(): HasMany
    {
        return $this->hasMany(UserSubscription::class);
    }
}
