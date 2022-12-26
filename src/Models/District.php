<?php

namespace Kevinpurwito\LaravelCountry\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Kevinpurwito\LaravelCountry\Relationships\BelongsToCity;
use Kevinpurwito\LaravelCountry\Relationships\BelongsToCountry;
use Kevinpurwito\LaravelCountry\Relationships\BelongsToProvince;
use Kevinpurwito\LaravelCountry\Relationships\HasManyWards;

/**
 * Kevinpurwito\LaravelCountry\Models\District
 * @property-read int $id
 * @property int $country_id
 * @property int $province_id
 * @property int $city_id
 * @property ?string $code
 * @property string $name
 * @property int $ordinal
 * @property-read mixed $created_at
 * @property-read mixed $updated_at
 * @property-read Country|null $country
 * @property-read Province|null $province
 * @property-read City|null $city
 * @property-read Collection|Ward[]|null $wards
 */
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
        return $query
            ->when(config('kp_country.ordinal_column'), static fn ($query) => $query->orderBy('ordinal'))
            ->orderBy('name');
    }

    public function setOrdinal(int $ordinal): void
    {
        $this->update(['ordinal' => $ordinal]);
    }
}
