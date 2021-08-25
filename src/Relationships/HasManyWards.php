<?php

namespace Kevinpurwito\LaravelCountry\Relationships;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Kevinpurwito\LaravelCountry\Models\Ward;

trait HasManyWards
{
    public function wards(): HasMany
    {
        return $this->hasMany(Ward::class);
    }
}
