<?php

namespace Kevinpurwito\LaravelCountry\Relationships;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Kevinpurwito\LaravelCountry\Models\District;

trait BelongsToDistrict
{
    public function district(): BelongsTo
    {
        return $this->belongsTo(District::class);
    }
}
