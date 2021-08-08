<?php

namespace Kevinpurwito\LaravelCountry\Relationships;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Kevinpurwito\LaravelCountry\Models\Province;

trait HasManyProvinces
{
    public function provinces(): HasMany
    {
        return $this->hasMany(Province::class);
    }
}
