<?php

namespace Kevinpurwito\LaravelCountry\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Kevinpurwito\LaravelCountry\Models\Country;
use Kevinpurwito\LaravelCountry\Models\Province;

class IdCitiesSeeder extends Seeder
{
    public function run()
    {
        $provinceTable = config('kp_country.table_names.province', 'provinces');
        if (! Schema::hasTable($provinceTable)) {
            return false;
        }

        $cityTable = config('kp_country.table_names.city', 'cities');
        if (! Schema::hasTable($cityTable)) {
            return false;
        }

        /** @var Country $country */
        $country = Country::with(['provinces'])->whereIso3('IDN')->first(); // Indonesia

        $uniqueBy = ['province_id', 'code'];
        $values = [];

        /** @var Province $province */
        $province = $country->provinces->firstWhere('code', '11');
        $values[] = ['code' => '11.05', 'name' => 'Kab. Aceh Barat', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '11.12', 'name' => 'Kab. Aceh Barat Daya', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '11.06', 'name' => 'Kab. Aceh Besar', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '11.14', 'name' => 'Kab. Aceh Jaya', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '11.01', 'name' => 'Kab. Aceh Selatan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '11.10', 'name' => 'Kab. Aceh Singkil', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '11.16', 'name' => 'Kab. Aceh Tamiang', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '11.04', 'name' => 'Kab. Aceh Tengah', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '11.02', 'name' => 'Kab. Aceh Tenggara', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '11.03', 'name' => 'Kab. Aceh Timur', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '11.08', 'name' => 'Kab. Aceh Utara', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '11.17', 'name' => 'Kab. Bener Meriah', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '11.11', 'name' => 'Kab. Bireuen', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '11.13', 'name' => 'Kab. Gayo Lues', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '11.15', 'name' => 'Kab. Nagan Raya', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '11.07', 'name' => 'Kab. Pidie', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '11.18', 'name' => 'Kab. Pidie Jaya', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '11.09', 'name' => 'Kab. Simeulue', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '11.71', 'name' => 'Kota Banda Aceh', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '11.74', 'name' => 'Kota Langsa', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '11.73', 'name' => 'Kota Lhokseumawe', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '11.72', 'name' => 'Kota Sabang', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '11.75', 'name' => 'Kota Subulussalam', 'country_id' => $country->id, 'province_id' => $province->id];

        /** @var Province $province */
        $province = $country->provinces->firstWhere('code', '12');
        $values[] = ['code' => '12.09', 'name' => 'Kab. Asahan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '12.19', 'name' => 'Kab. Batu Bara', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '12.11', 'name' => 'Kab. Dairi', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '12.07', 'name' => 'Kab. Deli Serdang', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '12.16', 'name' => 'Kab. Humbang Hasundutan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '12.06', 'name' => 'Kab. Karo', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '12.10', 'name' => 'Kab. Labuhanbatu', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '12.22', 'name' => 'Kab. Labuhanbatu Selatan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '12.23', 'name' => 'Kab. Labuhanbatu Utara', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '12.05', 'name' => 'Kab. Langkat', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '12.13', 'name' => 'Kab. Mandailing Natal', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '12.04', 'name' => 'Kab. Nias', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '12.25', 'name' => 'Kab. Nias Barat', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '12.14', 'name' => 'Kab. Nias Selatan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '12.24', 'name' => 'Kab. Nias Utara', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '12.21', 'name' => 'Kab. Padang Lawas', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '12.20', 'name' => 'Kab. Padang Lawas Utara', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '12.15', 'name' => 'Kab. Pakpak Bharat', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '12.17', 'name' => 'Kab. Samosir', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '12.18', 'name' => 'Kab. Serdang Bedagai', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '12.08', 'name' => 'Kab. Simalungun', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '12.03', 'name' => 'Kab. Tapanuli Selatan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '12.01', 'name' => 'Kab. Tapanuli Tengah', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '12.02', 'name' => 'Kab. Tapanuli Utara', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '12.12', 'name' => 'Kab. Toba', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '12.75', 'name' => 'Kota Binjai', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '12.78', 'name' => 'Kota Gunungsitoli', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '12.71', 'name' => 'Kota Medan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '12.77', 'name' => 'Kota Padang Sidempuan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '12.72', 'name' => 'Kota Pematang Siantar', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '12.73', 'name' => 'Kota Sibolga', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '12.74', 'name' => 'Kota Tanjung Balai', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '12.76', 'name' => 'Kota Tebing Tinggi', 'country_id' => $country->id, 'province_id' => $province->id];

        /** @var Province $province */
        $province = $country->provinces->firstWhere('code', '13');
        $values[] = ['code' => '13.06', 'name' => 'Kab. Agam', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '13.10', 'name' => 'Kab. Dharmasraya', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '13.09', 'name' => 'Kab. Kepulauan Mentawai', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '13.07', 'name' => 'Kab. Lima Puluh Koto', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '13.05', 'name' => 'Kab. Padang Pariaman', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '13.08', 'name' => 'Kab. Pasaman', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '13.12', 'name' => 'Kab. Pasaman Barat', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '13.01', 'name' => 'Kab. Pesisir Selatan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '13.03', 'name' => 'Kab. Sijunjung', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '13.02', 'name' => 'Kab. Solok', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '13.11', 'name' => 'Kab. Solok Selatan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '13.04', 'name' => 'Kab. Tanah Datar', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '13.75', 'name' => 'Kota Bukittinggi', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '13.71', 'name' => 'Kota Padang', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '13.74', 'name' => 'Kota Padang Panjang', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '13.77', 'name' => 'Kota Pariaman', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '13.76', 'name' => 'Kota Payakumbuh', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '13.73', 'name' => 'Kota Sawahlunto', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '13.72', 'name' => 'Kota Solok', 'country_id' => $country->id, 'province_id' => $province->id];

        /** @var Province $province */
        $province = $country->provinces->firstWhere('code', '17');
        $values[] = ['code' => '17.01', 'name' => 'Kab. Bengkulu Selatan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '17.09', 'name' => 'Kab. Bengkulu Tengah', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '17.03', 'name' => 'Kab. Bengkulu Utara', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '17.04', 'name' => 'Kab. Kaur', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '17.08', 'name' => 'Kab. Kepahiang', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '17.07', 'name' => 'Kab. Lebong', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '17.06', 'name' => 'Kab. Muko-muko', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '17.02', 'name' => 'Kab. Rejang Lebong', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '17.05', 'name' => 'Kab. Seluma', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '17.71', 'name' => 'Kota Bengkulu', 'country_id' => $country->id, 'province_id' => $province->id];

        /** @var Province $province */
        $province = $country->provinces->firstWhere('code', '14');
        $values[] = ['code' => '14.03', 'name' => 'Kab. Bengkalis', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '14.04', 'name' => 'Kab. Indragiri Hilir', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '14.02', 'name' => 'Kab. Indragiri Hulu', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '14.01', 'name' => 'Kab. Kampar', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '14.10', 'name' => 'Kab. Kepulauan Meranti', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '14.09', 'name' => 'Kab. Kuantan Singingi', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '14.05', 'name' => 'Kab. Pelalawan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '14.07', 'name' => 'Kab. Rokan Hilir', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '14.06', 'name' => 'Kab. Rokan Hulu', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '14.08', 'name' => 'Kab. Siak', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '14.72', 'name' => 'Kota Dumai', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '14.71', 'name' => 'Kota Pekanbaru', 'country_id' => $country->id, 'province_id' => $province->id];

        /** @var Province $province */
        $province = $country->provinces->firstWhere('code', '21');
        $values[] = ['code' => '21.01', 'name' => 'Kab. Bintan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '21.02', 'name' => 'Kab. Karimun', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '21.05', 'name' => 'Kab. Kepulauan Anambas', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '21.04', 'name' => 'Kab. Lingga', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '21.03', 'name' => 'Kab. Natuna', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '21.71', 'name' => 'Kota Batam', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '21.72', 'name' => 'Kota Tanjung Pinang', 'country_id' => $country->id, 'province_id' => $province->id];

        /** @var Province $province */
        $province = $country->provinces->firstWhere('code', '15');
        $values[] = ['code' => '15.04', 'name' => 'Kab. Batang Hari', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '15.08', 'name' => 'Kab. Bungo', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '15.01', 'name' => 'Kab. Kerinci', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '15.02', 'name' => 'Kab. Merangin', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '15.05', 'name' => 'Kab. Muaro Jambi', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '15.03', 'name' => 'Kab. Sarolangun', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '15.06', 'name' => 'Kab. Tanjung Jabung Barat', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '15.07', 'name' => 'Kab. Tanjung Jabung Timur', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '15.09', 'name' => 'Kab. Tebo', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '15.71', 'name' => 'Kota Jambi', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '15.72', 'name' => 'Kota Sungai Penuh', 'country_id' => $country->id, 'province_id' => $province->id];

        /** @var Province $province */
        $province = $country->provinces->firstWhere('code', '16');
        $values[] = ['code' => '16.07', 'name' => 'Kab. Banyuasin', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '16.11', 'name' => 'Kab. Empat Lawang', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '16.04', 'name' => 'Kab. Lahat', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '16.03', 'name' => 'Kab. Muara Enim', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '16.06', 'name' => 'Kab. Musi Banyuasin', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '16.05', 'name' => 'Kab. Musi Rawas', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '16.13', 'name' => 'Kab. Musi Rawas Utara', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '16.10', 'name' => 'Kab. Ogan Ilir', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '16.02', 'name' => 'Kab. Ogan Komering Ilir', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '16.01', 'name' => 'Kab. Ogan Komering Ulu', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '16.09', 'name' => 'Kab. Ogan Komering Ulu Selatan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '16.08', 'name' => 'Kab. Ogan Komering Ulu Timur', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '16.12', 'name' => 'Kab. Penukal Abab Lematang Ilir', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '16.73', 'name' => 'Kota Lubuk Linggau', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '16.72', 'name' => 'Kota Pagar Alam', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '16.71', 'name' => 'Kota Palembang', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '16.74', 'name' => 'Kota Prabumulih', 'country_id' => $country->id, 'province_id' => $province->id];

        /** @var Province $province */
        $province = $country->provinces->firstWhere('code', '18');
        $values[] = ['code' => '18.04', 'name' => 'Kab. Lampung Barat', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '18.01', 'name' => 'Kab. Lampung Selatan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '18.02', 'name' => 'Kab. Lampung Tengah', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '18.07', 'name' => 'Kab. Lampung Timur', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '18.03', 'name' => 'Kab. Lampung Utara', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '18.11', 'name' => 'Kab. Mesuji', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '18.09', 'name' => 'Kab. Pesawaran', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '18.13', 'name' => 'Kab. Pesisir Barat', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '18.10', 'name' => 'Kab. Pringsewu', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '18.06', 'name' => 'Kab. Tanggamus', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '18.05', 'name' => 'Kab. Tulang Bawang', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '18.12', 'name' => 'Kab. Tulang Bawang Barat', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '18.08', 'name' => 'Kab. Way Kanan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '18.71', 'name' => 'Kota Bandar Lampung', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '18.72', 'name' => 'Kota Metro', 'country_id' => $country->id, 'province_id' => $province->id];

        /** @var Province $province */
        $province = $country->provinces->firstWhere('code', '19');
        $values[] = ['code' => '19.01', 'name' => 'Kab. Bangka', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '19.05', 'name' => 'Kab. Bangka Barat', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '19.03', 'name' => 'Kab. Bangka Selatan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '19.04', 'name' => 'Kab. Bangka Tengah', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '19.02', 'name' => 'Kab. Belitung', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '19.06', 'name' => 'Kab. Belitung Timur', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '19.71', 'name' => 'Kota Pangkal Pinang', 'country_id' => $country->id, 'province_id' => $province->id];

        /** @var Province $province */
        $province = $country->provinces->firstWhere('code', '31');
        $values[] = ['code' => '31.01', 'name' => 'Kab. Kepulauan Seribu', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '31.73', 'name' => 'Kota Jakarta Barat', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '31.71', 'name' => 'Kota Jakarta Pusat', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '31.74', 'name' => 'Kota Jakarta Selatan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '31.75', 'name' => 'Kota Jakarta Timur', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '31.72', 'name' => 'Kota Jakarta Utara', 'country_id' => $country->id, 'province_id' => $province->id];

        /** @var Province $province */
        $province = $country->provinces->firstWhere('code', '32');
        $values[] = ['code' => '32.04', 'name' => 'Kab. Bandung', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '32.17', 'name' => 'Kab. Bandung Barat', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '32.16', 'name' => 'Kab. Bekasi', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '32.01', 'name' => 'Kab. Bogor', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '32.07', 'name' => 'Kab. Ciamis', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '32.03', 'name' => 'Kab. Cianjur', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '32.09', 'name' => 'Kab. Cirebon', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '32.05', 'name' => 'Kab. Garut', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '32.12', 'name' => 'Kab. Indramayu', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '32.15', 'name' => 'Kab. Karawang', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '32.08', 'name' => 'Kab. Kuningan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '32.10', 'name' => 'Kab. Majalengka', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '32.18', 'name' => 'Kab. Pangandaran', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '32.14', 'name' => 'Kab. Purwakarta', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '32.13', 'name' => 'Kab. Subang', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '32.02', 'name' => 'Kab. Sukabumi', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '32.11', 'name' => 'Kab. Sumedang', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '32.06', 'name' => 'Kab. Tasikmalaya', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '32.73', 'name' => 'Kota Bandung', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '32.79', 'name' => 'Kota Banjar', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '32.75', 'name' => 'Kota Bekasi', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '32.71', 'name' => 'Kota Bogor', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '32.77', 'name' => 'Kota Cimahi', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '32.74', 'name' => 'Kota Cirebon', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '32.76', 'name' => 'Kota Depok', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '32.72', 'name' => 'Kota Sukabumi', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '32.78', 'name' => 'Kota Tasikmalaya', 'country_id' => $country->id, 'province_id' => $province->id];

        /** @var Province $province */
        $province = $country->provinces->firstWhere('code', '36');
        $values[] = ['code' => '36.02', 'name' => 'Kab. Lebak', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '36.01', 'name' => 'Kab. Pandeglang', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '36.04', 'name' => 'Kab. Serang', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '36.03', 'name' => 'Kab. Tangerang', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '36.71', 'name' => 'Kota Tangerang', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '36.72', 'name' => 'Kota Cilegon', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '36.73', 'name' => 'Kota Serang', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '36.74', 'name' => 'Kota Tangerang Selatan', 'country_id' => $country->id, 'province_id' => $province->id];

        /** @var Province $province */
        $province = $country->provinces->firstWhere('code', '33');
        $values[] = ['code' => '33.04', 'name' => 'Kab. Banjarnegara', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '33.02', 'name' => 'Kab. Banyumas', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '33.25', 'name' => 'Kab. Batang', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '33.16', 'name' => 'Kab. Blora', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '33.09', 'name' => 'Kab. Boyolali', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '33.29', 'name' => 'Kab. Brebes', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '33.01', 'name' => 'Kab. Cilacap', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '33.21', 'name' => 'Kab. Demak', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '33.15', 'name' => 'Kab. Grobogan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '33.20', 'name' => 'Kab. Jepara', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '33.13', 'name' => 'Kab. Karanganyar', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '33.05', 'name' => 'Kab. Kebumen', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '33.24', 'name' => 'Kab. Kendal', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '33.10', 'name' => 'Kab. Klaten', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '33.19', 'name' => 'Kab. Kudus', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '33.08', 'name' => 'Kab. Magelang', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '33.18', 'name' => 'Kab. Pati', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '33.26', 'name' => 'Kab. Pekalongan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '33.27', 'name' => 'Kab. Pemalang', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '33.03', 'name' => 'Kab. Purbalingga', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '33.06', 'name' => 'Kab. Purworejo', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '33.17', 'name' => 'Kab. Rembang', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '33.14', 'name' => 'Kab. Sragen', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '33.22', 'name' => 'Kab. Semarang', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '33.11', 'name' => 'Kab. Sukoharjo', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '33.23', 'name' => 'Kab. Temanggung', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '33.28', 'name' => 'Kab. Tegal', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '33.12', 'name' => 'Kab. Wonogiri', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '33.07', 'name' => 'Kab. Wonosobo', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '33.71', 'name' => 'Kota Magelang', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '33.75', 'name' => 'Kota Pekalongan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '33.72', 'name' => 'Kota Surakarta', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '33.73', 'name' => 'Kota Salatiga', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '33.74', 'name' => 'Kota Semarang', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '33.76', 'name' => 'Kota Tegal', 'country_id' => $country->id, 'province_id' => $province->id];

        /** @var Province $province */
        $province = $country->provinces->firstWhere('code', '34');
        $values[] = ['code' => '34.02', 'name' => 'Kab. Bantul', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '34.03', 'name' => 'Kab. Gunung Kidul', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '34.01', 'name' => 'Kab. Kulon Progo', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '34.04', 'name' => 'Kab. Sleman', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '34.71', 'name' => 'Kota Yogyakarta', 'country_id' => $country->id, 'province_id' => $province->id];

        /** @var Province $province */
        $province = $country->provinces->firstWhere('code', '35');
        $values[] = ['code' => '35.26', 'name' => 'Kab. Bangkalan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '35.10', 'name' => 'Kab. Banyuwangi', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '35.05', 'name' => 'Kab. Blitar', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '35.22', 'name' => 'Kab. Bojonegoro', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '35.11', 'name' => 'Kab. Bondowoso', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '35.25', 'name' => 'Kab. Gresik', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '35.09', 'name' => 'Kab. Jember', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '35.17', 'name' => 'Kab. Jombang', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '35.06', 'name' => 'Kab. Kediri', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '35.24', 'name' => 'Kab. Lamongan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '35.08', 'name' => 'Kab. Lumajang', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '35.19', 'name' => 'Kab. Madiun', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '35.20', 'name' => 'Kab. Magetan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '35.07', 'name' => 'Kab. Malang', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '35.16', 'name' => 'Kab. Mojokerto', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '35.18', 'name' => 'Kab. Nganjuk', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '35.21', 'name' => 'Kab. Ngawi', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '35.01', 'name' => 'Kab. Pacitan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '35.28', 'name' => 'Kab. Pamekasan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '35.14', 'name' => 'Kab. Pasuruan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '35.02', 'name' => 'Kab. Ponorogo', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '35.13', 'name' => 'Kab. Probolinggo', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '35.27', 'name' => 'Kab. Sampang', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '35.15', 'name' => 'Kab. Sidoarjo', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '35.12', 'name' => 'Kab. Situbondo', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '35.29', 'name' => 'Kab. Sumenep', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '35.03', 'name' => 'Kab. Trenggalek', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '35.23', 'name' => 'Kab. Tuban', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '35.04', 'name' => 'Kab. Tulungagung', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '35.79', 'name' => 'Kota Batu', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '35.72', 'name' => 'Kota Blitar', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '35.71', 'name' => 'Kota Kediri', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '35.77', 'name' => 'Kota Madiun', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '35.73', 'name' => 'Kota Malang', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '35.76', 'name' => 'Kota Mojokerto', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '35.75', 'name' => 'Kota Pasuruan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '35.74', 'name' => 'Kota Probolinggo', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '35.78', 'name' => 'Kota Surabaya', 'country_id' => $country->id, 'province_id' => $province->id];

        /** @var Province $province */
        $province = $country->provinces->firstWhere('code', '61');
        $values[] = ['code' => '61.07', 'name' => 'Kab. Bengkayang', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '61.06', 'name' => 'Kab. Kapuas Hulu', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '61.11', 'name' => 'Kab. Kayong Utara', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '61.04', 'name' => 'Kab. Ketapang', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '61.12', 'name' => 'Kab. Kubu Raya', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '61.08', 'name' => 'Kab. Landak', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '61.10', 'name' => 'Kab. Melawi', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '61.02', 'name' => 'Kab. Mempawah', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '61.01', 'name' => 'Kab. Sambas', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '61.03', 'name' => 'Kab. Sanggau', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '61.09', 'name' => 'Kab. Sekadau', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '61.05', 'name' => 'Kab. Sintang', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '61.71', 'name' => 'Kota Pontianak', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '61.72', 'name' => 'Kota Singkawang', 'country_id' => $country->id, 'province_id' => $province->id];

        /** @var Province $province */
        $province = $country->provinces->firstWhere('code', '63');
        $values[] = ['code' => '63.11', 'name' => 'Kab. Balangan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '63.03', 'name' => 'Kab. Banjar', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '63.04', 'name' => 'Kab. Barito Kuala', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '63.06', 'name' => 'Kab. Hulu Sungai Selatan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '63.07', 'name' => 'Kab. Hulu Sungai Tengah', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '63.08', 'name' => 'Kab. Hulu Sungai Utara', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '63.02', 'name' => 'Kab. Kotabaru', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '63.09', 'name' => 'Kab. Tabalong', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '63.10', 'name' => 'Kab. Tanah Bumbu', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '63.01', 'name' => 'Kab. Tanah Laut', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '63.05', 'name' => 'Kab. Tapin', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '63.72', 'name' => 'Kota Banjarbaru', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '63.71', 'name' => 'Kota Banjarmasin', 'country_id' => $country->id, 'province_id' => $province->id];

        /** @var Province $province */
        $province = $country->provinces->firstWhere('code', '64');
        $values[] = ['code' => '64.03', 'name' => 'Kab. Berau', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '64.07', 'name' => 'Kab. Kutai Barat', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '64.02', 'name' => 'Kab. Kutai Kartanegara', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '64.08', 'name' => 'Kab. Kutai Timur', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '64.11', 'name' => 'Kab. Mahakam Ulu', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '64.01', 'name' => 'Kab. Paser', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '64.09', 'name' => 'Kab. Penajam Paser Utara', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '64.71', 'name' => 'Kota Balikpapan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '64.74', 'name' => 'Kota Bontang', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '64.72', 'name' => 'Kota Samarinda', 'country_id' => $country->id, 'province_id' => $province->id];

        /** @var Province $province */
        $province = $country->provinces->firstWhere('code', '62');
        $values[] = ['code' => '62.04', 'name' => 'Kab. Barito Selatan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '62.13', 'name' => 'Kab. Barito Timur', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '62.05', 'name' => 'Kab. Barito Utara', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '62.10', 'name' => 'Kab. Gunung Mas', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '62.03', 'name' => 'Kab. Kapuas', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '62.06', 'name' => 'Kab. Katingan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '62.01', 'name' => 'Kab. Kotawaringin Barat', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '62.02', 'name' => 'Kab. Kotawaringin Timur', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '62.09', 'name' => 'Kab. Lamandau', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '62.12', 'name' => 'Kab. Murung Raya', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '62.11', 'name' => 'Kab. Pulang Pisau', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '62.07', 'name' => 'Kab. Seruyan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '62.08', 'name' => 'Kab. Sukamara', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '62.71', 'name' => 'Kota Palangka Raya', 'country_id' => $country->id, 'province_id' => $province->id];

        /** @var Province $province */
        $province = $country->provinces->firstWhere('code', '65');
        $values[] = ['code' => '65.01', 'name' => 'Kab. Bulungan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '65.02', 'name' => 'Kab. Malinau', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '65.03', 'name' => 'Kab. Nunukan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '65.04', 'name' => 'Kab. Tana Tidung', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '65.71', 'name' => 'Kota Tarakan', 'country_id' => $country->id, 'province_id' => $province->id];

        /** @var Province $province */
        $province = $country->provinces->firstWhere('code', '51');
        $values[] = ['code' => '51.03', 'name' => 'Kab. Badung', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '51.06', 'name' => 'Kab. Bangli', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '51.08', 'name' => 'Kab. Buleleng', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '51.04', 'name' => 'Kab. Gianyar', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '51.01', 'name' => 'Kab. Jembrana', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '51.07', 'name' => 'Kab. Karangasem', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '51.05', 'name' => 'Kab. Klungkung', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '51.02', 'name' => 'Kab. Tabanan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '51.71', 'name' => 'Kota Denpasar', 'country_id' => $country->id, 'province_id' => $province->id];

        /** @var Province $province */
        $province = $country->provinces->firstWhere('code', '52');
        $values[] = ['code' => '52.06', 'name' => 'Kab. Bima', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '52.05', 'name' => 'Kab. Dompu', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '52.01', 'name' => 'Kab. Lombok Barat', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '52.02', 'name' => 'Kab. Lombok Tengah', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '52.03', 'name' => 'Kab. Lombok Timur', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '52.08', 'name' => 'Kab. Lombok Utara', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '52.04', 'name' => 'Kab. Sumbawa', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '52.07', 'name' => 'Kab. Sumbawa Barat', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '52.72', 'name' => 'Kota Bima', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '52.71', 'name' => 'Kota Mataram', 'country_id' => $country->id, 'province_id' => $province->id];

        /** @var Province $province */
        $province = $country->provinces->firstWhere('code', '53');
        $values[] = ['code' => '53.05', 'name' => 'Kab. Alor', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '53.04', 'name' => 'Kab. Belu', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '53.08', 'name' => 'Kab. Ende', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '53.06', 'name' => 'Kab. Flores Timur', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '53.01', 'name' => 'Kab. Kupang', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '53.13', 'name' => 'Kab. Lembata', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '53.21', 'name' => 'Kab. Malaka', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '53.10', 'name' => 'Kab. Manggarai', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '53.15', 'name' => 'Kab. Manggarai Barat', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '53.19', 'name' => 'Kab. Manggarai Timur', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '53.16', 'name' => 'Kab. Nagekeo', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '53.09', 'name' => 'Kab. Ngada', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '53.14', 'name' => 'Kab. Rote Ndao', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '53.20', 'name' => 'Kab. Sabu Raijua', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '53.07', 'name' => 'Kab. Sikka', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '53.12', 'name' => 'Kab. Sumba Barat', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '53.18', 'name' => 'Kab. Sumba Barat Daya', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '53.17', 'name' => 'Kab. Sumba Tengah', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '53.11', 'name' => 'Kab. Sumba Timur', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '53.02', 'name' => 'Kab. Timor Tengah Selatan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '53.03', 'name' => 'Kab. Timor Tengah Utara', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '53.71', 'name' => 'Kota Kupang', 'country_id' => $country->id, 'province_id' => $province->id];

        /** @var Province $province */
        $province = $country->provinces->firstWhere('code', '76');
        $values[] = ['code' => '76.02', 'name' => 'Kab. Mamuju', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '76.01', 'name' => 'Kab. Pasangkayu', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '76.04', 'name' => 'Kab. Polewali Mandar', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '76.03', 'name' => 'Kab. Mamasa', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '76.05', 'name' => 'Kab. Majene', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '76.06', 'name' => 'Kab. Mamuju Tengah', 'country_id' => $country->id, 'province_id' => $province->id];

        /** @var Province $province */
        $province = $country->provinces->firstWhere('code', '73');
        $values[] = ['code' => '73.03', 'name' => 'Kab. Bantaeng', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '73.11', 'name' => 'Kab. Barru', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '73.08', 'name' => 'Kab. Bone', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '73.02', 'name' => 'Kab. Bulukumba', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '73.16', 'name' => 'Kab. Enrekang', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '73.06', 'name' => 'Kab. Gowa', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '73.04', 'name' => 'Kab. Jeneponto', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '73.01', 'name' => 'Kab. Kepulauan Selayar', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '73.17', 'name' => 'Kab. Luwu', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '73.24', 'name' => 'Kab. Luwu Timur', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '73.22', 'name' => 'Kab. Luwu Utara', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '73.09', 'name' => 'Kab. Maros', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '73.10', 'name' => 'Kab. Pangkajene dan Kepulauan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '73.15', 'name' => 'Kab. Pinrang', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '73.14', 'name' => 'Kab. Sidenreng Rappang', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '73.07', 'name' => 'Kab. Sinjai', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '73.12', 'name' => 'Kab. Soppeng', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '73.05', 'name' => 'Kab. Takalar', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '73.18', 'name' => 'Kab. Tana Toraja', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '73.26', 'name' => 'Kab. Toraja Utara', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '73.13', 'name' => 'Kab. Wajo', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '73.71', 'name' => 'Kota Makassar', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '73.73', 'name' => 'Kota Palopo', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '73.72', 'name' => 'Kota Parepare', 'country_id' => $country->id, 'province_id' => $province->id];

        /** @var Province $province */
        $province = $country->provinces->firstWhere('code', '72');
        $values[] = ['code' => '72.01', 'name' => 'Kab. Banggai', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '72.07', 'name' => 'Kab. Banggai Kepulauan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '72.11', 'name' => 'Kab. Banggai Laut', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '72.05', 'name' => 'Kab. Buol', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '72.03', 'name' => 'Kab. Donggala', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '72.06', 'name' => 'Kab. Morowali', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '72.12', 'name' => 'Kab. Morowali Utara', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '72.08', 'name' => 'Kab. Parigi Moutong', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '72.02', 'name' => 'Kab. Poso', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '72.10', 'name' => 'Kab. Sigi', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '72.09', 'name' => 'Kab. Tojo Una-Una', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '72.04', 'name' => 'Kab. Tolitoli', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '72.71', 'name' => 'Kota Palu', 'country_id' => $country->id, 'province_id' => $province->id];

        /** @var Province $province */
        $province = $country->provinces->firstWhere('code', '74');
        $values[] = ['code' => '74.01', 'name' => 'Kab. Kolaka', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '74.02', 'name' => 'Kab. Konawe', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '74.03', 'name' => 'Kab. Muna', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '74.04', 'name' => 'Kab. Buton', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '74.05', 'name' => 'Kab. Konawe Selatan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '74.06', 'name' => 'Kab. Bombana', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '74.07', 'name' => 'Kab. Wakatobi', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '74.08', 'name' => 'Kab. Kolaka Utara', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '74.09', 'name' => 'Kab. Konawe Utara', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '74.10', 'name' => 'Kab. Buton Utara', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '74.11', 'name' => 'Kab. Kolaka Timur', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '74.12', 'name' => 'Kab. Konawe Kepulauan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '74.13', 'name' => 'Kab. Muna Barat', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '74.14', 'name' => 'Kab. Buton Tengah', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '74.15', 'name' => 'Kab. Buton Selatan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '74.71', 'name' => 'Kota Kendari', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '74.72', 'name' => 'Kota Baubau', 'country_id' => $country->id, 'province_id' => $province->id];

        /** @var Province $province */
        $province = $country->provinces->firstWhere('code', '71');
        $values[] = ['code' => '71.01', 'name' => 'Kab. Bolaang Mongondow', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '71.02', 'name' => 'Kab. Minahasa', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '71.03', 'name' => 'Kab. Kepulauan Sangihe', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '71.04', 'name' => 'Kab. Kepulauan Talaud', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '71.05', 'name' => 'Kab. Minahasa Selatan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '71.06', 'name' => 'Kab. Minahasa Utara', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '71.07', 'name' => 'Kab. Minahasa Tenggara', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '71.08', 'name' => 'Kab. Bolaang Mongondow Utara', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '71.09', 'name' => 'Kab. Kepulauan Siau Tagulandang Biaro', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '71.10', 'name' => 'Kab. Bolaang Mongondow Timur', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '71.11', 'name' => 'Kab. Bolaang Mongondow Selatan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '71.71', 'name' => 'Kota Manado', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '71.72', 'name' => 'Kota Bitung', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '71.73', 'name' => 'Kota Tomohon', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '71.74', 'name' => 'Kota Kotamobagu', 'country_id' => $country->id, 'province_id' => $province->id];

        /** @var Province $province */
        $province = $country->provinces->firstWhere('code', '75');
        $values[] = ['code' => '75.02', 'name' => 'Kab. Boalemo', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '75.03', 'name' => 'Kab. Bone Bolango', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '75.01', 'name' => 'Kab. Gorontalo', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '75.05', 'name' => 'Kab. Gorontalo Utara', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '75.04', 'name' => 'Kab. Pohuwato', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '75.71', 'name' => 'Kota Gorontalo', 'country_id' => $country->id, 'province_id' => $province->id];

        /** @var Province $province */
        $province = $country->provinces->firstWhere('code', '81');
        $values[] = ['code' => '81.04', 'name' => 'Kab. Buru', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '81.09', 'name' => 'Kab. Buru Selatan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '81.07', 'name' => 'Kab. Kepulauan Aru', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '81.08', 'name' => 'Kab. Maluku Barat Daya', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '81.01', 'name' => 'Kab. Maluku Tengah', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '81.02', 'name' => 'Kab. Maluku Tenggara', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '81.03', 'name' => 'Kab. Kepulauan Tanimbar', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '81.06', 'name' => 'Kab. Seram Bagian Barat', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '81.05', 'name' => 'Kab. Seram Bagian Timur', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '81.71', 'name' => 'Kota Ambon', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '81.72', 'name' => 'Kota Tual', 'country_id' => $country->id, 'province_id' => $province->id];

        /** @var Province $province */
        $province = $country->provinces->firstWhere('code', '82');
        $values[] = ['code' => '82.01', 'name' => 'Kab. Halmahera Barat', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '82.04', 'name' => 'Kab. Halmahera Selatan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '82.02', 'name' => 'Kab. Halmahera Tengah', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '82.06', 'name' => 'Kab. Halmahera Timur', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '82.03', 'name' => 'Kab. Halmahera Utara', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '82.07', 'name' => 'Kab. Pulau Morotai', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '82.05', 'name' => 'Kab. Kepulauan Sula', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '82.08', 'name' => 'Kab. Pulau Taliabu', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '82.71', 'name' => 'Kota Ternate', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '82.72', 'name' => 'Kota Tidore Kepulauan', 'country_id' => $country->id, 'province_id' => $province->id];

        /** @var Province $province */
        $province = $country->provinces->firstWhere('code', '91');
        $values[] = ['code' => '91.18', 'name' => 'Kab. Asmat', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '91.06', 'name' => 'Kab. Biak Numfor', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '91.16', 'name' => 'Kab. Boven Digoel', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '91.28', 'name' => 'Kab. Deiyai', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '91.26', 'name' => 'Kab. Dogiyai', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '91.27', 'name' => 'Kab. Intan Jaya', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '91.03', 'name' => 'Kab. Jayapura', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '91.02', 'name' => 'Kab. Jayawijaya', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '91.11', 'name' => 'Kab. Keerom', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '91.05', 'name' => 'Kab. Kepulauan Yapen', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '91.23', 'name' => 'Kab. Lanny Jaya', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '91.17', 'name' => 'Kab. Mappi', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '91.20', 'name' => 'Kab. Memberamo Raya', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '91.21', 'name' => 'Kab. Membramo Tengah', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '91.01', 'name' => 'Kab. Merauke', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '91.09', 'name' => 'Kab. Mimika', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '91.04', 'name' => 'Kab. Nabire', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '91.24', 'name' => 'Kab. Nduga', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '91.08', 'name' => 'Kab. Paniai', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '91.12', 'name' => 'Kab. Pegunungan Bintang', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '91.25', 'name' => 'Kab. Puncak', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '91.07', 'name' => 'Kab. Puncak Jaya', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '91.10', 'name' => 'Kab. Sarmi', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '91.19', 'name' => 'Kab. Supiori', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '91.14', 'name' => 'Kab. Tolikara', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '91.15', 'name' => 'Kab. Waropen', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '91.13', 'name' => 'Kab. Yahukimo', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '91.22', 'name' => 'Kab. Yalimo', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '91.71', 'name' => 'Kota Jayapura', 'country_id' => $country->id, 'province_id' => $province->id];

        /** @var Province $province */
        $province = $country->provinces->firstWhere('code', '92');
        $values[] = ['code' => '92.03', 'name' => 'Kab. Fakfak', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '92.08', 'name' => 'Kab. Kaimana', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '92.02', 'name' => 'Kab. Manokwari', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '92.11', 'name' => 'Kab. Manokwari Selatan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '92.10', 'name' => 'Kab. Maybrat', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '92.12', 'name' => 'Kab. Pegunungan Arfak', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '92.05', 'name' => 'Kab. Raja Ampat', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '92.01', 'name' => 'Kab. Sorong', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '92.04', 'name' => 'Kab. Sorong Selatan', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '92.09', 'name' => 'Kab. Tambrauw', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '92.06', 'name' => 'Kab. Teluk Bintuni', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '92.07', 'name' => 'Kab. Teluk Wondama', 'country_id' => $country->id, 'province_id' => $province->id];
        $values[] = ['code' => '92.71', 'name' => 'Kota Sorong', 'country_id' => $country->id, 'province_id' => $province->id];

        DB::table($cityTable)->upsert($values, $uniqueBy);

        return true;
    }
}
