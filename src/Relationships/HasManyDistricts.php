<?php

namespace Kevinpurwito\LaravelCountry\Relationships;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Kevinpurwito\LaravelCountry\Models\District;

trait HasManyDistricts
{
    public function districts(): HasMany
    {
        return $this->hasMany(District::class);
    }
}
