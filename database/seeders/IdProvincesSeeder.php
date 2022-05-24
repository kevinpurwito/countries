<?php

namespace Kevinpurwito\LaravelCountry\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Kevinpurwito\LaravelCountry\Models\Country;

class IdProvincesSeeder extends Seeder
{
    public function run()
    {
        $provinceTable = config('kp_country.table_names.province', 'provinces');
        if (! Schema::hasTable($provinceTable)) {
            return false;
        }

        $country = Country::findByIso3('IDN'); // Indonesia

        $uniqueBy = ['country_id', 'iso2'];
        $values = [];

        $values[] = ['iso2' => 'ID-AC', 'name' => 'Aceh', 'code' => '11', 'country_id' => $country->id];
        $values[] = ['iso2' => 'ID-SU', 'name' => 'Sumatra Utara', 'code' => '12', 'country_id' => $country->id];
        $values[] = ['iso2' => 'ID-SB', 'name' => 'Sumatra Barat', 'code' => '13', 'country_id' => $country->id];
        $values[] = ['iso2' => 'ID-RI', 'name' => 'Riau', 'code' => '14', 'country_id' => $country->id];
        $values[] = ['iso2' => 'ID-JA', 'name' => 'Jambi', 'code' => '15', 'country_id' => $country->id];
        $values[] = ['iso2' => 'ID-SS', 'name' => 'Sumatra Selatan', 'code' => '16', 'country_id' => $country->id];
        $values[] = ['iso2' => 'ID-BE', 'name' => 'Bengkulu', 'code' => '17', 'country_id' => $country->id];
        $values[] = ['iso2' => 'ID-LA', 'name' => 'Lampung', 'code' => '18', 'country_id' => $country->id];
        $values[] = ['iso2' => 'ID-BB', 'name' => 'Kep. Bangka Belitung', 'code' => '19', 'country_id' => $country->id];
        $values[] = ['iso2' => 'ID-KR', 'name' => 'Kep. Riau', 'code' => '21', 'country_id' => $country->id];

        $values[] = ['iso2' => 'ID-JK', 'name' => 'DKI Jakarta', 'code' => '31', 'country_id' => $country->id];
        $values[] = ['iso2' => 'ID-JB', 'name' => 'Jawa Barat', 'code' => '32', 'country_id' => $country->id];
        $values[] = ['iso2' => 'ID-JT', 'name' => 'Jawa Tengah', 'code' => '33', 'country_id' => $country->id];
        $values[] = ['iso2' => 'ID-YO', 'name' => 'DI Yogyakarta', 'code' => '34', 'country_id' => $country->id];
        $values[] = ['iso2' => 'ID-JI', 'name' => 'Jawa Timur', 'code' => '35', 'country_id' => $country->id];
        $values[] = ['iso2' => 'ID-BT', 'name' => 'Banten', 'code' => '36', 'country_id' => $country->id];

        $values[] = ['iso2' => 'ID-BA', 'name' => 'Bali', 'code' => '51', 'country_id' => $country->id];
        $values[] = ['iso2' => 'ID-NB', 'name' => 'Nusa Tenggara Barat', 'code' => '52', 'country_id' => $country->id];
        $values[] = ['iso2' => 'ID-NT', 'name' => 'Nusa Tenggara Timur', 'code' => '53', 'country_id' => $country->id];

        $values[] = ['iso2' => 'ID-KB', 'name' => 'Kalimantan Barat', 'code' => '61', 'country_id' => $country->id];
        $values[] = ['iso2' => 'ID-KT', 'name' => 'Kalimantan Tengah', 'code' => '62', 'country_id' => $country->id];
        $values[] = ['iso2' => 'ID-KS', 'name' => 'Kalimantan Selatan', 'code' => '63', 'country_id' => $country->id];
        $values[] = ['iso2' => 'ID-KI', 'name' => 'Kalimantan Timur', 'code' => '64', 'country_id' => $country->id];
        $values[] = ['iso2' => 'ID-KU', 'name' => 'Kalimantan Utara', 'code' => '65', 'country_id' => $country->id];

        $values[] = ['iso2' => 'ID-SA', 'name' => 'Sulawesi Utara', 'code' => '71', 'country_id' => $country->id];
        $values[] = ['iso2' => 'ID-ST', 'name' => 'Sulawesi Tengah', 'code' => '72', 'country_id' => $country->id];
        $values[] = ['iso2' => 'ID-SN', 'name' => 'Sulawesi Selatan', 'code' => '73', 'country_id' => $country->id];
        $values[] = ['iso2' => 'ID-SG', 'name' => 'Sulawesi Tenggara', 'code' => '74', 'country_id' => $country->id];
        $values[] = ['iso2' => 'ID-GO', 'name' => 'Gorontalo', 'code' => '75', 'country_id' => $country->id];
        $values[] = ['iso2' => 'ID-SR', 'name' => 'Sulawesi Barat', 'code' => '76', 'country_id' => $country->id];

        $values[] = ['iso2' => 'ID-MA', 'name' => 'Maluku', 'code' => '81', 'country_id' => $country->id];
        $values[] = ['iso2' => 'ID-MU', 'name' => 'Maluku Utara', 'code' => '82', 'country_id' => $country->id];

        $values[] = ['iso2' => 'ID-PA', 'name' => 'Papua', 'code' => '91', 'country_id' => $country->id];
        $values[] = ['iso2' => 'ID-PB', 'name' => 'Papua Barat', 'code' => '92', 'country_id' => $country->id];

        DB::table($provinceTable)->upsert($values, $uniqueBy);

        return true;
    }
}
