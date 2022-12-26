<?php

namespace Kevinpurwito\LaravelCountry\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Schema;
use Kevinpurwito\LaravelCountry\Relationships\BelongsToCountry;
use Kevinpurwito\LaravelCountry\Relationships\HasManyCities;
use Kevinpurwito\LaravelCountry\Relationships\HasManyDistricts;
use Kevinpurwito\LaravelCountry\Relationships\HasManyWards;

/**
 * Kevinpurwito\LaravelCountry\Models\Province
 * @property-read int $id
 * @property int $country_id
 * @property ?string $code
 * @property string $iso2
 * @property string $name
 * @property int $ordinal
 * @property-read mixed $created_at
 * @property-read mixed $updated_at
 * @property-read Country|null $country
 * @property-read Collection|City[]|null $cities
 * @property-read Collection|District[]|null $districts
 * @property-read Collection|Ward[]|null $wards
 */
class Province extends Model
{
    use BelongsToCountry;
    use HasManyCities;
    use HasManyDistricts;
    use HasManyWards;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function getTable()
    {
        return config('kp_country.table_names.province', parent::getTable());
    }

    public function scopeDefault($query)
    {
        return $query
            ->when(config('kp_country.ordinal_column'), fn($query) => $query->orderBy('ordinal'))
            ->orderBy('name');
    }

    public function setOrdinal(int $ordinal)
    {
        $this->update(['ordinal' => $ordinal]);
    }

    public function createCity($code, $name)
    {
        if (! Schema::hasTable($this->getTable())) {
            return null;
        }

        return City::updateOrCreate(['code' => $code], ['country_id' => $this->country_id, 'province_id' => $this->id, 'name' => $name]);
    }
}
