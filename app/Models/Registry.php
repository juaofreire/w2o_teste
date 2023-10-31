<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Registry extends Model
{
    protected $fillable=[
        'type',
        'initial_quantity',
        'alteration',
        'product_id',
        'user_id',
        'employee_id'
    ];

    const TYPE=[
        'entry'=>'Entry',
        'out'=>'Out',
    ];

    const TYPE_COLOR=[
        'entry'=>'success',
        'out'=>'danger',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }
}
