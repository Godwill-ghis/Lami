<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    protected $fillable = ['user_id', 'stripe_invoice_id', 'amount', 'stripe_product_id'];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
