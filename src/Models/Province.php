<?php

namespace Kevinpurwito\LaravelCountry\Models;

use Illuminate\Database\Eloquent\Model;
use Kevinpurwito\LaravelCountry\Relationships\BelongsToCountry;
use Kevinpurwito\LaravelCountry\Relationships\HasManyCities;

class Province extends Model
{
    use BelongsToCountry;
    use HasManyCities;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function getTable()
    {
        return config('kp_country.table_names.province', parent::getTable());
    }

    public function scopeDefault($query)
    {
        return $query->when(config('kp_country.order_no_column'), function ($query) {
            return $query->orderBy('order_no', 'ASC');
        })->orderBy('name', 'ASC');
    }

    public function setOrderNo(int $orderNo)
    {
        $this->update(['order_no' => $orderNo]);
    }

    public function createCity($code, $name)
    {
        return City::firstOrCreate(['code' => $code], ['country_id' => $this->country_id, 'province_id' => $this->id, 'name' => $name]);
    }
}
