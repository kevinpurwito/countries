<?php

namespace Kevinpurwito\LaravelCountry\Relationships;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Kevinpurwito\LaravelCountry\Models\Country;

trait BelongsToCountry
{
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
}
