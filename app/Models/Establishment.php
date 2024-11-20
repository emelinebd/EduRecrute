<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Establishment extends Model
{
    protected $fillable = ['name', 'description', 'location', 'rating'];

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
