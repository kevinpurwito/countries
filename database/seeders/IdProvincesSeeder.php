<?php

namespace Kevinpurwito\LaravelCountry\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Kevinpurwito\LaravelCountry\Models\Country;
use Kevinpurwito\LaravelCountry\Models\Province;

class IdProvincesSeeder extends Seeder
{
    public function run()
    {
        $provinceTable = config('kp_country.table_names.province', 'provinces');
        if (! Schema::hasTable($provinceTable)) {
            return false;
        }

        $country = Country::findByIso3('IDN'); // Indonesia

        $country->createProvince('ID-AC', 'Aceh', '11');
        $country->createProvince('ID-BT', 'Banten', '35');
        $country->createProvince('ID-BE', 'Bengkulu', '15');
        $country->createProvince('ID-GO', 'Gorontalo', '71');
        $country->createProvince('ID-JK', 'DKI Jakarta', '31');
        $country->createProvince('ID-JA', 'Jambi', '14');
        $country->createProvince('ID-JB', 'Jawa Barat', '32');
        $country->createProvince('ID-JT', 'Jawa Tengah', '36');
        $country->createProvince('ID-JI', 'Jawa Timur', '34');
        $country->createProvince('ID-KB', 'Kalimantan Barat', '62');
        $country->createProvince('ID-KS', 'Kalimantan Selatan', '51');
        $country->createProvince('ID-KT', 'Kalimantan Tengah', '65');
        $country->createProvince('ID-KI', 'Kalimantan Timur', '52');
        $country->createProvince('ID-KU', 'Kalimantan Utara', '53');
        $country->createProvince('ID-BB', 'Kep. Bangka Belitung', '18');
        $country->createProvince('ID-KR', 'Kep. Riau', '19');
        $country->createProvince('ID-LA', 'Lampung', '16');
        $country->createProvince('ID-MA', 'Maluku', '81');
        $country->createProvince('ID-MU', 'Maluku Utara', '82');
        $country->createProvince('ID-BA', 'Bali', '61');
        $country->createProvince('ID-NB', 'Nusa Tenggara Barat', '63');
        $country->createProvince('ID-NT', 'Nusa Tenggara Timur', '64');
        $country->createProvince('ID-PA', 'Papua', '92');
        $country->createProvince('ID-PB', 'Papua Barat', '91');
        $country->createProvince('ID-RI', 'Riau', '17');
        $country->createProvince('ID-SR', 'Sulawesi Barat', '75');
        $country->createProvince('ID-SN', 'Sulawesi Selatan', '72');
        $country->createProvince('ID-ST', 'Sulawesi Tengah', '73');
        $country->createProvince('ID-SG', 'Sulawesi Tenggara', '74');
        $country->createProvince('ID-SA', 'Sulawesi Utara', '76');
        $country->createProvince('ID-SB', 'Sumatra Barat', '13');
        $country->createProvince('ID-SS', 'Sumatra Selatan', '21');
        $country->createProvince('ID-SU', 'Sumatra Utara', '12');
        $country->createProvince('ID-YO', 'DI Yogyakarta', '33');

        return true;
    }
}
