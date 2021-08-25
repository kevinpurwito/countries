<?php

namespace Kevinpurwito\LaravelCountry\Models;

use Illuminate\Database\Eloquent\Model;
use Kevinpurwito\LaravelCountry\Relationships\BelongsToCity;
use Kevinpurwito\LaravelCountry\Relationships\BelongsToCountry;
use Kevinpurwito\LaravelCountry\Relationships\BelongsToProvince;
use Kevinpurwito\LaravelCountry\Relationships\HasManyWards;

class District extends Model
{
    use BelongsToCountry;
    use BelongsToProvince;
    use BelongsToCity;
    use HasManyWards;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function getTable()
    {
        return config('kp_country.table_names.district', parent::getTable());
    }

    public function scopeDefault($query)
    {
        return $query->when(config('kp_country.ordinal_column'), function ($query) {
            return $query->orderBy('ordinal');
        })->orderBy('name');
    }

    public function setOrdinal(int $ordinal)
    {
        $this->update(['ordinal' => $ordinal]);
    }
}
