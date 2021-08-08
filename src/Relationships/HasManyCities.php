<?php

namespace Kevinpurwito\LaravelCountry\Relationships;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Kevinpurwito\LaravelCountry\Models\City;

trait HasManyCities
{
    public function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }
}
