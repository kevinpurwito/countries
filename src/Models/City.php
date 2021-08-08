<?php

namespace Kevinpurwito\LaravelCountry\Models;

use Illuminate\Database\Eloquent\Model;
use Kevinpurwito\LaravelCountry\Relationships\BelongsToCountry;
use Kevinpurwito\LaravelCountry\Relationships\BelongsToProvince;

class City extends Model
{
    use BelongsToCountry;
    use BelongsToProvince;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function getTable()
    {
        return config('kp_country.table_names.city', parent::getTable());
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
}
