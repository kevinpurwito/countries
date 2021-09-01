<?php

namespace Kevinpurwito\LaravelCountry\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Kevinpurwito\LaravelCountry\Relationships\BelongsToCountry;
use Kevinpurwito\LaravelCountry\Relationships\BelongsToProvince;
use Kevinpurwito\LaravelCountry\Relationships\HasManyDistricts;
use Kevinpurwito\LaravelCountry\Relationships\HasManyWards;

class City extends Model
{
    use BelongsToCountry;
    use BelongsToProvince;
    use HasManyDistricts;
    use HasManyWards;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function getTable()
    {
        return config('kp_country.table_names.city', parent::getTable());
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

    public function createDistrict($code, $name)
    {
        if (! Schema::hasTable($this->getTable())) {
            return null;
        }

        return District::firstOrCreate(['code' => $code], [
            'country_id' => $this->country_id, 'province_id' => $this->province_id,
            'city_id' => $this->id, 'name' => $name
        ]);
    }
}
