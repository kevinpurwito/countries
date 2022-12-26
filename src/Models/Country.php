<?php

namespace Kevinpurwito\LaravelCountry\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Kevinpurwito\LaravelCountry\Database\Factories\CountryFactory;
use Kevinpurwito\LaravelCountry\Relationships\HasManyCities;
use Kevinpurwito\LaravelCountry\Relationships\HasManyDistricts;
use Kevinpurwito\LaravelCountry\Relationships\HasManyProvinces;
use Kevinpurwito\LaravelCountry\Relationships\HasManyWards;

/**
 * Kevinpurwito\LaravelCountry\Models\Country
 * @property-read int $id
 * @property string $code
 * @property string $iso2
 * @property string $iso3
 * @property string $name
 * @property bool $popular
 * @property int $ordinal
 * @property-read mixed $created_at
 * @property-read mixed $updated_at
 * @property-read Collection|Province[]|null $provinces
 * @property-read Collection|City[]|null $cities
 * @property-read Collection|District[]|null $districts
 * @property-read Collection|Ward[]|null $wards
 */
class Country extends Model
{
    use HasFactory;
    use HasManyProvinces;
    use HasManyCities;
    use HasManyDistricts;
    use HasManyWards;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function getTable()
    {
        return config('kp_country.table_names.country', parent::getTable());
    }

    public function scopeDefault($query)
    {
        return $query
            ->when(config('kp_country.popular_column'), fn ($query) => $query->orderByDesc('popular'))
            ->when(config('kp_country.ordinal_column'), fn ($query) => $query->orderBy('ordinal'))
            ->orderBy('name');
    }

    public static function findByName(string $name): self
    {
        return self::whereName($name)->first();
    }

    public static function findByIso2(string $iso2): self
    {
        return self::whereIso2($iso2)->first();
    }

    public static function findByIso3(string $iso3): self
    {
        return self::whereIso3($iso3)->first();
    }

    public function setPopular(bool $isPopular)
    {
        $this->update(['popular' => $isPopular]);
    }

    public function setOrdinal(int $ordinal)
    {
        $this->update(['ordinal' => $ordinal]);
    }

    public function createProvince($iso2, $name, $code = null)
    {
        return Province::updateOrCreate(['iso2' => $iso2], ['country_id' => $this->id, 'name' => $name, 'code' => $code ?? $iso2]);
    }

    protected static function newFactory(): CountryFactory
    {
        return CountryFactory::new();
    }
}
