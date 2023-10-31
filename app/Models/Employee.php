<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
    protected $fillable=[
        'name',
        'email'
    ];

    public function registries(): HasMany
    {
        return $this->hasMany(Registry::class);
    }
}
