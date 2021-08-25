<?php

namespace Kevinpurwito\LaravelCountry\Relationships;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Kevinpurwito\LaravelCountry\Models\Ward;

trait BelongsToWard
{
    public function ward(): BelongsTo
    {
        return $this->belongsTo(Ward::class);
    }
}
