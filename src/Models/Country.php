<?php

namespace Kevinpurwito\LaravelCountry\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kevinpurwito\LaravelCountry\Relationships\HasManyCities;
use Kevinpurwito\LaravelCountry\Relationships\HasManyProvinces;

class Country extends Model
{
    use HasFactory;
    use HasManyProvinces;
    use HasManyCities;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function getTable()
    {
        return config('kp_country.table_names.country', parent::getTable());
    }

    public function scopeDefault($query)
    {
        return $query->when(config('kp_country.popular_column'), function ($query) {
            return $query->orderBy('popular', 'DESC');
        })->when(config('kp_country.order_no_column'), function ($query) {
            return $query->orderBy('order_no', 'ASC');
        })->orderBy('name', 'ASC');
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

    public function setOrderNo(int $orderNo)
    {
        $this->update(['order_no' => $orderNo]);
    }

    public function createProvince($code, $name)
    {
        return Province::firstOrCreate(['code' => $code], ['country_id' => $this->id, 'name' => $name]);
    }

    protected static function newFactory()
    {
        return \Kevinpurwito\LaravelCountry\Database\Factories\CountryFactory::new();
    }
}
