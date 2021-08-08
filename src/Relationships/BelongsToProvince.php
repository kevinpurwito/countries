<?php

namespace Kevinpurwito\LaravelCountry\Relationships;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Kevinpurwito\LaravelCountry\Models\Province;

trait BelongsToProvince
{
    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class);
    }
}
