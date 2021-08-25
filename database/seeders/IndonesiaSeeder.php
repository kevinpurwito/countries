<?php

namespace Kevinpurwito\LaravelCountry\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Kevinpurwito\LaravelCountry\Models\Country;
use Kevinpurwito\LaravelCountry\Models\Province;

class IndonesiaSeeder extends Seeder
{
    public function run()
    {
        $country = Country::findByIso3('IDN'); // Indonesia

        $this->createIdProvinces($country);

        // provinces `code` are from ISO 3166-2:ID
        // cities, districts and wards `code` are from Kemendagri
    }

    public function createIdProvinces(Country $country)
    {
        $provinceTable = config('kp_country.table_names.province', 'provinces');
        if (! Schema::hasTable($provinceTable)) {
            return false;
        }

        $province = $country->createProvince('ID-AC', 'Aceh');
        $this->createIdAcCities($province);

        $province = $country->createProvince('ID-BT', 'Banten');
        $this->createIdBtCities($province);

        $province = $country->createProvince('ID-BE', 'Bengkulu');
        $this->createIdBeCities($province);

        $province = $country->createProvince('ID-GO', 'Gorontalo');
        $this->createIdGoCities($province);

        $province = $country->createProvince('ID-JK', 'Jakarta');
        $this->createIdJkCities($province);

        $province = $country->createProvince('ID-JA', 'Jambi');
        $this->createIdJaCities($province);

        $province = $country->createProvince('ID-JB', 'Jawa Barat');
        $this->createIdJbCities($province);

        $province = $country->createProvince('ID-JT', 'Jawa Tengah');
        $this->createIdJtCities($province);

        $province = $country->createProvince('ID-JI', 'Jawa Timur');
        $this->createIdJiCities($province);

        $province = $country->createProvince('ID-KB', 'Kalimantan Barat');
        $this->createIdKbCities($province);

        $province = $country->createProvince('ID-KS', 'Kalimantan Selatan');
        $this->createIdKsCities($province);

        $province = $country->createProvince('ID-KT', 'Kalimantan Tengah');
        $this->createIdKtCities($province);

        $province = $country->createProvince('ID-KI', 'Kalimantan Timur');
        $this->createIdKiCities($province);

        $province = $country->createProvince('ID-KU', 'Kalimantan Utara');
        $this->createIdKuCities($province);

        $province = $country->createProvince('ID-BB', 'Kepulauan Bangka Belitung');
        $this->createIdBbCities($province);

        $province = $country->createProvince('ID-KR', 'Kepulauan Riau');
        $this->createIdKrCities($province);

        $province = $country->createProvince('ID-LA', 'Lampung');
        $this->createIdLaCities($province);

        $province = $country->createProvince('ID-MA', 'Maluku');
        $this->createIdMaCities($province);

        $province = $country->createProvince('ID-MU', 'Maluku Utara');
        $this->createIdMuCities($province);

        $province = $country->createProvince('ID-BA', 'Bali');
        $this->createIdBaCities($province);

        $province = $country->createProvince('ID-NB', 'Nusa Tenggara Barat');
        $this->createIdNbCities($province);

        $province = $country->createProvince('ID-NT', 'Nusa Tenggara Timur');
        $this->createIdNtCities($province);

        $province = $country->createProvince('ID-PA', 'Papua');
        $this->createIdPaCities($province);

        $province = $country->createProvince('ID-PB', 'Papua Barat');
        $this->createIdPbCities($province);

        $province = $country->createProvince('ID-RI', 'Riau');
        $this->createIdRiCities($province);

        $province = $country->createProvince('ID-SR', 'Sulawesi Barat');
        $this->createIdSrCities($province);

        $province = $country->createProvince('ID-SN', 'Sulawesi Selatan');
        $this->createIdSnCities($province);

        $province = $country->createProvince('ID-ST', 'Sulawesi Tengah');
        $this->createIdStCities($province);

        $province = $country->createProvince('ID-SG', 'Sulawesi Tenggara');
        $this->createIdSgCities($province);

        $province = $country->createProvince('ID-SA', 'Sulawesi Utara');
        $this->createIdSaCities($province);

        $province = $country->createProvince('ID-SB', 'Sumatra Barat');
        $this->createIdSbCities($province);

        $province = $country->createProvince('ID-SS', 'Sumatra Selatan');
        $this->createIdSsCities($province);

        $province = $country->createProvince('ID-SU', 'Sumatra Utara');
        $this->createIdSuCities($province);

        $province = $country->createProvince('ID-YO', 'Yogyakarta');
        $this->createIdYoCities($province);

        return true;
    }

    public function createIdAcCities(Province $province)
    {
        $province->createCity('ID-AC-001', 'Kab. Aceh Barat');
        $province->createCity('ID-AC-002', 'Kab. Aceh Barat Daya');
        $province->createCity('ID-AC-003', 'Kab. Aceh Besar');
        $province->createCity('ID-AC-004', 'Kab. Aceh Jaya');
        $province->createCity('ID-AC-005', 'Kab. Aceh Selatan');
        $province->createCity('ID-AC-006', 'Kab. Aceh Singkil');
        $province->createCity('ID-AC-007', 'Kab. Aceh Tamiang');
        $province->createCity('ID-AC-008', 'Kab. Aceh Tengah');
        $province->createCity('ID-AC-009', 'Kab. Aceh Tenggaran');
        $province->createCity('ID-AC-010', 'Kab. Aceh Timur');
        $province->createCity('ID-AC-011', 'Kab. Aceh Utara');
        $province->createCity('ID-AC-012', 'Kab. Bener Meriah');
        $province->createCity('ID-AC-013', 'Kab. Bireuen');
        $province->createCity('ID-AC-014', 'Kab. Gayo Lues');
        $province->createCity('ID-AC-015', 'Kab. Nagan Raya');
        $province->createCity('ID-AC-016', 'Kab. Pidie');
        $province->createCity('ID-AC-017', 'Kab. Pidie Jaya');
        $province->createCity('ID-AC-018', 'Kab. Simeulue');
        $province->createCity('ID-AC-019', 'Kota Banda Aceh');
        $province->createCity('ID-AC-020', 'Kota Langsa');
        $province->createCity('ID-AC-021', 'Kota Lhokseumawe');
        $province->createCity('ID-AC-022', 'Kota Sabang');
        $province->createCity('ID-AC-023', 'Kota Subulussalam');
    }

    public function createIdBtCities(Province $province)
    {
        $province->createCity('ID-BT-001', 'Kab. Lebak');
        $province->createCity('ID-BT-002', 'Kab. Pandeglang');
        $province->createCity('ID-BT-003', 'Kab. Serang');
        $province->createCity('ID-BT-004', 'Kab. Tangerang');
        $province->createCity('ID-BT-005', 'Kota Cilegon');
        $province->createCity('ID-BT-006', 'Kota Serang');
        $province->createCity('ID-BT-007', 'Kota Tangerang');
        $province->createCity('ID-BT-008', 'Kota Tangerang Selatan');
    }

    public function createIdBeCities(Province $province)
    {
        $province->createCity('ID-BE-001', 'Kab. Bengkulu Selatan');
        $province->createCity('ID-BE-002', 'Kab. Bengkulu Tengah');
        $province->createCity('ID-BE-003', 'Kab. Bengkulu Utara');
        $province->createCity('ID-BE-004', 'Kab. Kaur');
        $province->createCity('ID-BE-005', 'Kab. Kepahiang');
        $province->createCity('ID-BE-006', 'Kab. Lebong');
        $province->createCity('ID-BE-007', 'Kab. Mukomuko');
        $province->createCity('ID-BE-008', 'Kab. Rejang Lebong');
        $province->createCity('ID-BE-009', 'Kab. Seluma');
        $province->createCity('ID-BE-010', 'Kota Bengkulu');
    }

    public function createIdGoCities(Province $province)
    {
        $province->createCity('ID-GO-001', 'Kab. Boalemo');
        $province->createCity('ID-GO-002', 'Kab. Bone Bolango');
        $province->createCity('ID-GO-003', 'Kab. Gorontalo');
        $province->createCity('ID-GO-004', 'Kab. Gorontalo Utara');
        $province->createCity('ID-GO-005', 'Kab. Pohuwato');
        $province->createCity('ID-GO-006', 'Kota Gorontalo');
    }

    public function createIdJkCities(Province $province)
    {
        $province->createCity('ID-JK-001', 'Kota Administrasi Jakarta Pusat');
        $province->createCity('ID-JK-002', 'Kota Administrasi Jakarta Barat');
        $province->createCity('ID-JK-003', 'Kota Administrasi Jakarta Selatan');
        $province->createCity('ID-JK-004', 'Kota Administrasi Jakarta Timur');
        $province->createCity('ID-JK-005', 'Kota Administrasi Jakarta Utara');
        $province->createCity('ID-JK-006', 'Kab. Administrasi Kepulauan Seribu');
    }

    public function createIdJaCities(Province $province)
    {
        $province->createCity('ID-JA-001', 'Kab. Batanghari');
        $province->createCity('ID-JA-002', 'Kab. Bungo');
        $province->createCity('ID-JA-003', 'Kab. Kerinci');
        $province->createCity('ID-JA-004', 'Kab. Merangin');
        $province->createCity('ID-JA-005', 'Kab. Muaro Jambi');
        $province->createCity('ID-JA-006', 'Kab. Sarolangun');
        $province->createCity('ID-JA-007', 'Kab. Tanjung Jabung Barat');
        $province->createCity('ID-JA-008', 'Kab. Tanjung Jabung Timur');
        $province->createCity('ID-JA-009', 'Kab. Tebo');
        $province->createCity('ID-JA-010', 'Kota Jambi');
        $province->createCity('ID-JA-011', 'Kota Sungaipenuh');
    }

    public function createIdJbCities(Province $province)
    {
        $province->createCity('ID-JB-001', 'Kab. Bandung');
        $province->createCity('ID-JB-002', 'Kab. Bandung Barat');
        $province->createCity('ID-JB-003', 'Kab. Bekasi');
        $province->createCity('ID-JB-004', 'Kab. Bogor');
        $province->createCity('ID-JB-005', 'Kab. Ciamis');
        $province->createCity('ID-JB-006', 'Kab. Cianjur');
        $province->createCity('ID-JB-007', 'Kab. Cirebon');
        $province->createCity('ID-JB-008', 'Kab. Garut');
        $province->createCity('ID-JB-009', 'Kab. Indramayu');
        $province->createCity('ID-JB-010', 'Kab. Karawang');
        $province->createCity('ID-JB-011', 'Kab. Kuningan');
        $province->createCity('ID-JB-012', 'Kab. Majalengka');
        $province->createCity('ID-JB-013', 'Kab. Pangandaran');
        $province->createCity('ID-JB-014', 'Kab. Purwakarta');
        $province->createCity('ID-JB-015', 'Kab. Subang');
        $province->createCity('ID-JB-016', 'Kab. Sukabumi');
        $province->createCity('ID-JB-017', 'Kab. Sumedang');
        $province->createCity('ID-JB-018', 'Kab. Tasikmalaya');
        $province->createCity('ID-JB-019', 'Kota Bandung');
        $province->createCity('ID-JB-020', 'Kota Banjar');
        $province->createCity('ID-JB-021', 'Kota Bekasi');
        $province->createCity('ID-JB-022', 'Kota Bogor');
        $province->createCity('ID-JB-023', 'Kota Cimahi');
        $province->createCity('ID-JB-024', 'Kota Cirebon');
        $province->createCity('ID-JB-025', 'Kota Depok');
        $province->createCity('ID-JB-026', 'Kota Sukabumi');
        $province->createCity('ID-JB-027', 'Kota Tasikmalaya');
    }

    public function createIdJtCities(Province $province)
    {
        $province->createCity('ID-JT-001', 'Kab. Banjarnegara');
        $province->createCity('ID-JT-002', 'Kab. Banyumas');
        $province->createCity('ID-JT-003', 'Kab. Batang');
        $province->createCity('ID-JT-004', 'Kab. Blora');
        $province->createCity('ID-JT-005', 'Kab. Boyolali');
        $province->createCity('ID-JT-006', 'Kab. Brebes');
        $province->createCity('ID-JT-007', 'Kab. Cilacap');
        $province->createCity('ID-JT-008', 'Kab. Demak');
        $province->createCity('ID-JT-009', 'Kab. Grobogan');
        $province->createCity('ID-JT-010', 'Kab. Jepara');
        $province->createCity('ID-JT-011', 'Kab. Karanganyar');
        $province->createCity('ID-JT-012', 'Kab. Kebumen');
        $province->createCity('ID-JT-013', 'Kab. Kendal');
        $province->createCity('ID-JT-014', 'Kab. Klaten');
        $province->createCity('ID-JT-015', 'Kab. Kudus');
        $province->createCity('ID-JT-016', 'Kab. Magelang');
        $province->createCity('ID-JT-017', 'Kab. Pati');
        $province->createCity('ID-JT-018', 'Kab. Pekalongan');
        $province->createCity('ID-JT-019', 'Kab. Pemalang');
        $province->createCity('ID-JT-020', 'Kab. Purbalingga');
        $province->createCity('ID-JT-021', 'Kab. Purworejo');
        $province->createCity('ID-JT-022', 'Kab. Rembang');
        $province->createCity('ID-JT-023', 'Kab. Semarang');
        $province->createCity('ID-JT-024', 'Kab. Sragen');
        $province->createCity('ID-JT-025', 'Kab. Sukoharjo');
        $province->createCity('ID-JT-026', 'Kab. Tegal');
        $province->createCity('ID-JT-027', 'Kab. Temanggung');
        $province->createCity('ID-JT-028', 'Kab. Wonogiri');
        $province->createCity('ID-JT-029', 'Kab. Wonosobo');
        $province->createCity('ID-JT-030', 'Kota Magelang');
        $province->createCity('ID-JT-031', 'Kota Pekalongan');
        $province->createCity('ID-JT-032', 'Kota Salatiga');
        $province->createCity('ID-JT-033', 'Kota Semarang');
        $province->createCity('ID-JT-034', 'Kota Surakarta');
        $province->createCity('ID-JT-035', 'Kota Tegal');
    }

    public function createIdJiCities(Province $province)
    {
        $province->createCity('ID-JI-001', 'Kab. Bangkalan');
        $province->createCity('ID-JI-002', 'Kab. Banyuwangi');
        $province->createCity('ID-JI-003', 'Kab. Blitar');
        $province->createCity('ID-JI-004', 'Kab. Bojonegoro');
        $province->createCity('ID-JI-005', 'Kab. Bondowoso');
        $province->createCity('ID-JI-006', 'Kab. Gresik');
        $province->createCity('ID-JI-007', 'Kab. Jember');
        $province->createCity('ID-JI-008', 'Kab. Jombang');
        $province->createCity('ID-JI-009', 'Kab. Kediri');
        $province->createCity('ID-JI-010', 'Kab. Lamongan');
        $province->createCity('ID-JI-011', 'Kab. Lumajang');
        $province->createCity('ID-JI-012', 'Kab. Madiun');
        $province->createCity('ID-JI-013', 'Kab. Magetan');
        $province->createCity('ID-JI-014', 'Kab. Malang');
        $province->createCity('ID-JI-015', 'Kab. Mojokerto');
        $province->createCity('ID-JI-016', 'Kab. Nganjuk');
        $province->createCity('ID-JI-017', 'Kab. Ngawi');
        $province->createCity('ID-JI-018', 'Kab. Pacitan');
        $province->createCity('ID-JI-019', 'Kab. Pamekasan');
        $province->createCity('ID-JI-020', 'Kab. Pasuruan');
        $province->createCity('ID-JI-021', 'Kab. Ponorogo');
        $province->createCity('ID-JI-022', 'Kab. Probolinggo');
        $province->createCity('ID-JI-023', 'Kab. Sampang');
        $province->createCity('ID-JI-024', 'Kab. Sidoarjo');
        $province->createCity('ID-JI-025', 'Kab. Situbondo');
        $province->createCity('ID-JI-026', 'Kab. Sumenep');
        $province->createCity('ID-JI-027', 'Kab. Trenggalek');
        $province->createCity('ID-JI-028', 'Kab. Tuban');
        $province->createCity('ID-JI-029', 'Kab. Tulungagung');
        $province->createCity('ID-JI-030', 'Kota Batu');
        $province->createCity('ID-JI-031', 'Kota Blitar');
        $province->createCity('ID-JI-032', 'Kota Kediri');
        $province->createCity('ID-JI-033', 'Kota Madiun');
        $province->createCity('ID-JI-034', 'Kota Malang');
        $province->createCity('ID-JI-035', 'Kota Mojokerto');
        $province->createCity('ID-JI-036', 'Kota Pasuruan');
        $province->createCity('ID-JI-037', 'Kota Probolinggo');
        $province->createCity('ID-JI-038', 'Kota Surabaya');
    }

    public function createIdKbCities(Province $province)
    {
        $province->createCity('ID-KB-001', 'Kab. Bengkayang');
        $province->createCity('ID-KB-002', 'Kab. Kapuas Hulu');
        $province->createCity('ID-KB-003', 'Kab. Kayong Utara');
        $province->createCity('ID-KB-004', 'Kab. Ketapang');
        $province->createCity('ID-KB-005', 'Kab. Kubu Raya');
        $province->createCity('ID-KB-006', 'Kab. Landak');
        $province->createCity('ID-KB-007', 'Kab. Melawi');
        $province->createCity('ID-KB-008', 'Kab. Mempawah');
        $province->createCity('ID-KB-009', 'Kab. Sambas');
        $province->createCity('ID-KB-010', 'Kab. Sanggau');
        $province->createCity('ID-KB-011', 'Kab. Sekadau');
        $province->createCity('ID-KB-012', 'Kab. Sintang');
        $province->createCity('ID-KB-013', 'Kota Pontianak');
        $province->createCity('ID-KB-014', 'Kota Singkawang');
    }

    public function createIdKsCities(Province $province)
    {
        $province->createCity('ID-KS-001', 'Kab. Balangan');
        $province->createCity('ID-KS-002', 'Kab. Banjar');
        $province->createCity('ID-KS-003', 'Kab. Barito Kuala');
        $province->createCity('ID-KS-004', 'Kab. Hulu Sungai Selatan');
        $province->createCity('ID-KS-005', 'Kab. Hulu Sungai Tengah');
        $province->createCity('ID-KS-006', 'Kab. Hulu Sungai Utara');
        $province->createCity('ID-KS-007', 'Kab. Kotabaru');
        $province->createCity('ID-KS-008', 'Kab. Tabalong');
        $province->createCity('ID-KS-009', 'Kab. Tanah Bumbu');
        $province->createCity('ID-KS-010', 'Kab. Tanah Laut');
        $province->createCity('ID-KS-011', 'Kab. Tapin');
        $province->createCity('ID-KS-012', 'Kota Banjarbaru');
        $province->createCity('ID-KS-013', 'Kota Banjarmasin');
    }

    public function createIdKtCities(Province $province)
    {
        $province->createCity('ID-KT-001', 'Kab. Barito Selatan');
        $province->createCity('ID-KT-002', 'Kab. Barito Timur');
        $province->createCity('ID-KT-003', 'Kab. Barito Utara');
        $province->createCity('ID-KT-004', 'Kab. Gunung Mas');
        $province->createCity('ID-KT-005', 'Kab. Kapuas');
        $province->createCity('ID-KT-006', 'Kab. Katingan');
        $province->createCity('ID-KT-007', 'Kab. Kotawaringin Barat');
        $province->createCity('ID-KT-008', 'Kab. Kotawaringin Timur');
        $province->createCity('ID-KT-009', 'Kab. Lamandau');
        $province->createCity('ID-KT-010', 'Kab. Murung Raya');
        $province->createCity('ID-KT-011', 'Kab. Pulang Pisau');
        $province->createCity('ID-KT-012', 'Kab. Sukamara');
        $province->createCity('ID-KT-013', 'Kab. Seruyan');
        $province->createCity('ID-KT-014', 'Kota Palangka Raya');
    }

    public function createIdKiCities(Province $province)
    {
        $province->createCity('ID-KI-001', 'Kab. Berau');
        $province->createCity('ID-KI-002', 'Kab. Kutai Barat');
        $province->createCity('ID-KI-003', 'Kab. Kutai Kartanegara');
        $province->createCity('ID-KI-004', 'Kab. Kutai Timur');
        $province->createCity('ID-KI-005', 'Kab. Mahakam Ulu');
        $province->createCity('ID-KI-006', 'Kab. Paser');
        $province->createCity('ID-KI-007', 'Kab. Penajam Paser Utara');
        $province->createCity('ID-KI-008', 'Kota Balikpapan');
        $province->createCity('ID-KI-009', 'Kota Bontang');
        $province->createCity('ID-KI-010', 'Kota Samarinda');
    }

    public function createIdKuCities(Province $province)
    {
        $province->createCity('ID-KU-001', 'Kab. Bulungan');
        $province->createCity('ID-KU-002', 'Kab. Malinau');
        $province->createCity('ID-KU-003', 'Kab. Nunukan');
        $province->createCity('ID-KU-004', 'Kab. Tana Tidung');
        $province->createCity('ID-KU-005', 'Kota Tarakan');
    }

    public function createIdBbCities(Province $province)
    {
        $province->createCity('ID-BB-001', 'Kab. Bangka');
        $province->createCity('ID-BB-002', 'Kab. Belitung');
        $province->createCity('ID-BB-003', 'Kab. Bangka Barat');
        $province->createCity('ID-BB-004', 'Kab. Bangka Tengah');
        $province->createCity('ID-BB-005', 'Kab. Bangka Selatan');
        $province->createCity('ID-BB-006', 'Kab. Belitung Timur');
        $province->createCity('ID-BB-007', 'Kota Pangkal Pinang');
    }

    public function createIdKrCities(Province $province)
    {
        $province->createCity('ID-KR-001', 'Kab. Bintan');
        $province->createCity('ID-KR-002', 'Kab. Karimun');
        $province->createCity('ID-KR-003', 'Kab. Kepulauan Anambas');
        $province->createCity('ID-KR-004', 'Kab. Lingga');
        $province->createCity('ID-KR-005', 'Kab. Natuna');
        $province->createCity('ID-KR-006', 'Kota Batam');
        $province->createCity('ID-KR-007', 'Kota Tanjung Pinang');
    }

    public function createIdLaCities(Province $province)
    {
        $province->createCity('ID-LA-001', 'Kab. Lampung Barat');
        $province->createCity('ID-LA-002', 'Kab. Lampung Selatan');
        $province->createCity('ID-LA-003', 'Kab. Lampung Tengah');
        $province->createCity('ID-LA-004', 'Kab. Lampung Timur');
        $province->createCity('ID-LA-005', 'Kab. Lampung Utara');
        $province->createCity('ID-LA-006', 'Kab. Mesuji');
        $province->createCity('ID-LA-007', 'Kab. Pesawaran');
        $province->createCity('ID-LA-008', 'Kab. Pesisir Barat');
        $province->createCity('ID-LA-009', 'Kab. Pringsewu');
        $province->createCity('ID-LA-010', 'Kab. Tanggamus');
        $province->createCity('ID-LA-011', 'Kab. Tulang Bawang');
        $province->createCity('ID-LA-012', 'Kab. Tulang Bawang Barat');
        $province->createCity('ID-LA-013', 'Kab. Way Kanan');
        $province->createCity('ID-LA-014', 'Kota Bandar Lampung');
        $province->createCity('ID-LA-015', 'Kota Metro');
    }

    public function createIdMaCities(Province $province)
    {
        $province->createCity('ID-MA-001', 'Kab. Buru');
        $province->createCity('ID-MA-002', 'Kab. Buru Selatan');
        $province->createCity('ID-MA-003', 'Kab. Kepulauan Aru');
        $province->createCity('ID-MA-004', 'Kab. Maluku Barat Daya');
        $province->createCity('ID-MA-005', 'Kab. Maluku Tengah');
        $province->createCity('ID-MA-006', 'Kab. Maluku Tenggara');
        $province->createCity('ID-MA-007', 'Kab. Kepulauan Tanimbar');
        $province->createCity('ID-MA-008', 'Kab. Seram Bagian Barat');
        $province->createCity('ID-MA-009', 'Kab. Seram Bagian Timur');
        $province->createCity('ID-MA-010', 'Kota Ambon');
        $province->createCity('ID-MA-011', 'Kota Tual');
    }

    public function createIdMuCities(Province $province)
    {
        $province->createCity('ID-MU-001', 'Kab. Halmahera Barat');
        $province->createCity('ID-MU-002', 'Kab. Halmahera Tengah');
        $province->createCity('ID-MU-003', 'Kab. Halmahera Timur');
        $province->createCity('ID-MU-004', 'Kab. Halmahera Selatan');
        $province->createCity('ID-MU-005', 'Kab. Halmahera Utara');
        $province->createCity('ID-MU-006', 'Kab. Kepulauan Sula');
        $province->createCity('ID-MU-007', 'Kab. Pulau Morotai');
        $province->createCity('ID-MU-008', 'Kab. Pulau Taliabu');
        $province->createCity('ID-MU-009', 'Kota Ternate');
        $province->createCity('ID-MU-010', 'Kota Tidore Kepulauan');
    }

    public function createIdBaCities(Province $province)
    {
        $province->createCity('ID-BA-001', 'Kab. Badung');
        $province->createCity('ID-BA-002', 'Kab. Bangli');
        $province->createCity('ID-BA-003', 'Kab. Buleleng');
        $province->createCity('ID-BA-004', 'Kab. Gianyar');
        $province->createCity('ID-BA-005', 'Kab. Jembrana');
        $province->createCity('ID-BA-006', 'Kab. Karangasem');
        $province->createCity('ID-BA-007', 'Kab. Klungkung');
        $province->createCity('ID-BA-008', 'Kab. Tabanan');
        $province->createCity('ID-BA-009', 'Kota Denpasar');
    }

    public function createIdNbCities(Province $province)
    {
        $province->createCity('ID-NB-001', 'Kab. Bima');
        $province->createCity('ID-NB-002', 'Kab. Dompu');
        $province->createCity('ID-NB-003', 'Kab. Lombok Barat');
        $province->createCity('ID-NB-004', 'Kab. Lombok Tengah');
        $province->createCity('ID-NB-005', 'Kab. Lombok Timur');
        $province->createCity('ID-NB-006', 'Kab. Lombok Utara');
        $province->createCity('ID-NB-007', 'Kab. Sumbawa');
        $province->createCity('ID-NB-008', 'Kab. Sumbawa Barat');
        $province->createCity('ID-NB-009', 'Kota Bima');
        $province->createCity('ID-NB-010', 'Kota Mataram');
    }

    public function createIdNtCities(Province $province)
    {
        $province->createCity('ID-NT-001', 'Kab. Alor');
        $province->createCity('ID-NT-002', 'Kab. Belu');
        $province->createCity('ID-NT-003', 'Kab. Ende');
        $province->createCity('ID-NT-004', 'Kab. Flores Timur');
        $province->createCity('ID-NT-005', 'Kab. Kupang');
        $province->createCity('ID-NT-006', 'Kab. Lembata');
        $province->createCity('ID-NT-007', 'Kab. Malaka');
        $province->createCity('ID-NT-008', 'Kab. Manggarai');
        $province->createCity('ID-NT-009', 'Kab. Manggarai Barat');
        $province->createCity('ID-NT-010', 'Kab. Manggarai Timur');
        $province->createCity('ID-NT-011', 'Kab. Nagekeo');
        $province->createCity('ID-NT-012', 'Kab. Ngada');
        $province->createCity('ID-NT-013', 'Kab. Rote Ndao');
        $province->createCity('ID-NT-014', 'Kab. Sabu Raijua');
        $province->createCity('ID-NT-015', 'Kab. Sikka');
        $province->createCity('ID-NT-016', 'Kab. Sumba Barat');
        $province->createCity('ID-NT-017', 'Kab. Sumba Barat Daya');
        $province->createCity('ID-NT-018', 'Kab. Sumba Tengah');
        $province->createCity('ID-NT-019', 'Kab. Sumba Timur');
        $province->createCity('ID-NT-020', 'Kab. Timor Tengah Selatan');
        $province->createCity('ID-NT-021', 'Kab. Timor Tengah Utara');
        $province->createCity('ID-NT-022', 'Kota Kupang');
    }

    public function createIdPaCities(Province $province)
    {
        $province->createCity('ID-PA-001', 'Kab. Asmat');
        $province->createCity('ID-PA-002', 'Kab. Biak Numfor');
        $province->createCity('ID-PA-003', 'Kab. Boven Digoel');
        $province->createCity('ID-PA-004', 'Kab. Deiyai');
        $province->createCity('ID-PA-005', 'Kab. Dogiyai');
        $province->createCity('ID-PA-006', 'Kab. Intan Jaya');
        $province->createCity('ID-PA-007', 'Kab. Jayapura');
        $province->createCity('ID-PA-008', 'Kab. Jayawijaya');
        $province->createCity('ID-PA-009', 'Kab. Keerom');
        $province->createCity('ID-PA-010', 'Kab. Kepulauan Yapen');
        $province->createCity('ID-PA-011', 'Kab. Lanny Jaya');
        $province->createCity('ID-PA-012', 'Kab. Mamberamo Raya');
        $province->createCity('ID-PA-013', 'Kab. Mamberamo Tengah');
        $province->createCity('ID-PA-014', 'Kab. Mappi');
        $province->createCity('ID-PA-015', 'Kab. Merauke');
        $province->createCity('ID-PA-016', 'Kab. Mimika');
        $province->createCity('ID-PA-017', 'Kab. Nabire');
        $province->createCity('ID-PA-018', 'Kab. Nduga');
        $province->createCity('ID-PA-019', 'Kab. Paniai');
        $province->createCity('ID-PA-020', 'Kab. Pegunungan Bintang');
        $province->createCity('ID-PA-021', 'Kab. Puncak');
        $province->createCity('ID-PA-022', 'Kab. Puncak Jaya');
        $province->createCity('ID-PA-023', 'Kab. Sarmi');
        $province->createCity('ID-PA-024', 'Kab. Supiori');
        $province->createCity('ID-PA-025', 'Kab. Tolikara');
        $province->createCity('ID-PA-026', 'Kab. Waropen');
        $province->createCity('ID-PA-027', 'Kab. Yahukimo');
        $province->createCity('ID-PA-028', 'Kab. Yalimo');
        $province->createCity('ID-PA-029', 'Kota Jayapura');
    }

    public function createIdPbCities(Province $province)
    {
        $province->createCity('ID-PB-001', 'Kab. Fakfak');
        $province->createCity('ID-PB-002', 'Kab. Kaimana');
        $province->createCity('ID-PB-003', 'Kab. Manokwari');
        $province->createCity('ID-PB-004', 'Kab. Manokwari Selatan');
        $province->createCity('ID-PB-005', 'Kab. Maybrat');
        $province->createCity('ID-PB-006', 'Kab. Pegunungan Arfak');
        $province->createCity('ID-PB-007', 'Kab. Raja Ampat');
        $province->createCity('ID-PB-008', 'Kab. Sorong');
        $province->createCity('ID-PB-009', 'Kab. Sorong Selatan');
        $province->createCity('ID-PB-010', 'Kab. Tambrauw');
        $province->createCity('ID-PB-011', 'Kab. Teluk Bintuni');
        $province->createCity('ID-PB-012', 'Kab. Teluk Wondama');
        $province->createCity('ID-PB-013', 'Kota Sorong');
    }

    public function createIdRiCities(Province $province)
    {
        $province->createCity('ID-RI-001', 'Kab. Bengkalis');
        $province->createCity('ID-RI-002', 'Kab. Indragiri Hilir');
        $province->createCity('ID-RI-003', 'Kab. Indragiri Hulu');
        $province->createCity('ID-RI-004', 'Kab. Kampar');
        $province->createCity('ID-RI-005', 'Kab. Kepulauan Meranti');
        $province->createCity('ID-RI-006', 'Kab. Kuantan Singingi');
        $province->createCity('ID-RI-007', 'Kab. Pelalawan');
        $province->createCity('ID-RI-008', 'Kab. Rokan Hilir');
        $province->createCity('ID-RI-009', 'Kab. Rokan Hulu');
        $province->createCity('ID-RI-010', 'Kab. Siak');
        $province->createCity('ID-RI-011', 'Kota Dumai');
        $province->createCity('ID-RI-012', 'Kota Pekanbaru');
    }

    public function createIdSrCities(Province $province)
    {
        $province->createCity('ID-SR-001', 'Kab. Majene');
        $province->createCity('ID-SR-002', 'Kab. Mamasa');
        $province->createCity('ID-SR-003', 'Kab. Mamuju');
        $province->createCity('ID-SR-004', 'Kab. Mamuju Tengah');
        $province->createCity('ID-SR-005', 'Kab. Pasangkayu');
        $province->createCity('ID-SR-006', 'Kab. Polewali Mandar');
    }

    public function createIdSnCities(Province $province)
    {
        $province->createCity('ID-SN-001', 'Kab. Bantaeng');
        $province->createCity('ID-SN-002', 'Kab. Bamu');
        $province->createCity('ID-SN-003', 'Kab. Bone');
        $province->createCity('ID-SN-004', 'Kab. Bulukumba');
        $province->createCity('ID-SN-005', 'Kab. Enrekang');
        $province->createCity('ID-SN-006', 'Kab. Gowa');
        $province->createCity('ID-SN-007', 'Kab. Jeneponto');
        $province->createCity('ID-SN-008', 'Kab. Kepulauan Selayar');
        $province->createCity('ID-SN-009', 'Kab. Luwu');
        $province->createCity('ID-SN-010', 'Kab. Luwu Timur');
        $province->createCity('ID-SN-011', 'Kab. Luwu Utara');
        $province->createCity('ID-SN-012', 'Kab. Maros');
        $province->createCity('ID-SN-013', 'Kab. Pangkajene dan Kepulauan');
        $province->createCity('ID-SN-014', 'Kab. Pinrang');
        $province->createCity('ID-SN-015', 'Kab. Sidenreng Rappang');
        $province->createCity('ID-SN-016', 'Kab. Sinjai');
        $province->createCity('ID-SN-017', 'Kab. Soppeng');
        $province->createCity('ID-SN-018', 'Kab. Takalar');
        $province->createCity('ID-SN-019', 'Kab. Tana Toraja');
        $province->createCity('ID-SN-020', 'Kab. Toraja Utara');
        $province->createCity('ID-SN-021', 'Kab. Wajo');
        $province->createCity('ID-SN-022', 'Kota Makassar');
        $province->createCity('ID-SN-023', 'Kota Palopo');
        $province->createCity('ID-SN-024', 'Kota Parepare');
    }

    public function createIdStCities(Province $province)
    {
        $province->createCity('ID-ST-001', 'Kab. Banggai');
        $province->createCity('ID-ST-002', 'Kab. Banggai Kepulauan');
        $province->createCity('ID-ST-003', 'Kab. Banggai Laut');
        $province->createCity('ID-ST-004', 'Kab. Buol');
        $province->createCity('ID-ST-005', 'Kab. Donggala');
        $province->createCity('ID-ST-006', 'Kab. Morowali');
        $province->createCity('ID-ST-007', 'Kab. Morowali Utara');
        $province->createCity('ID-ST-008', 'Kab. Parigi Moutong');
        $province->createCity('ID-ST-009', 'Kab. Poso');
        $province->createCity('ID-ST-010', 'Kab. Sigi');
        $province->createCity('ID-ST-011', 'Kab. Tojo Una-Una');
        $province->createCity('ID-ST-012', 'Kab. Tolitoli');
        $province->createCity('ID-ST-013', 'Kota Palu');
    }

    public function createIdSgCities(Province $province)
    {
        $province->createCity('ID-SG-001', 'Kab. Bombana');
        $province->createCity('ID-SG-002', 'Kab. Buton');
        $province->createCity('ID-SG-003', 'Kab. Buton Selatan');
        $province->createCity('ID-SG-004', 'Kab. Buton Tengah');
        $province->createCity('ID-SG-005', 'Kab. Buton Utara');
        $province->createCity('ID-SG-006', 'Kab. Kolaka');
        $province->createCity('ID-SG-007', 'Kab. Kolaka Timur');
        $province->createCity('ID-SG-008', 'Kab. Kolaka Utara');
        $province->createCity('ID-SG-009', 'Kab. Konawe');
        $province->createCity('ID-SG-010', 'Kab. Konawe Kepulauan');
        $province->createCity('ID-SG-011', 'Kab. Konawe Selatan');
        $province->createCity('ID-SG-012', 'Kab. Konawe Utara');
        $province->createCity('ID-SG-013', 'Kab. Muna');
        $province->createCity('ID-SG-014', 'Kab. Muna Barat');
        $province->createCity('ID-SG-015', 'Kab. Wakatobi');
        $province->createCity('ID-SG-016', 'Kota Bau-bau');
        $province->createCity('ID-SG-017', 'Kota Kendari');
    }

    public function createIdSaCities(Province $province)
    {
        $province->createCity('ID-SA-001', 'Kab. Bolaang Mongondow');
        $province->createCity('ID-SA-002', 'Kab. Bolaang Mongondow Selatan');
        $province->createCity('ID-SA-003', 'Kab. Bolaang Mongondow Timur');
        $province->createCity('ID-SA-004', 'Kab. Bolaang Mongondow Utara');
        $province->createCity('ID-SA-005', 'Kab. Kepulauan Sangihe');
        $province->createCity('ID-SA-006', 'Kab. Kepulauan Siau Tagulandang Biaro');
        $province->createCity('ID-SA-007', 'Kab. Kepulauan Talaud');
        $province->createCity('ID-SA-008', 'Kab. Minahasa');
        $province->createCity('ID-SA-009', 'Kab. Minahasa Selatan');
        $province->createCity('ID-SA-010', 'Kab. Minahasa Tenggara');
        $province->createCity('ID-SA-011', 'Kab. Minahasa Utara');
        $province->createCity('ID-SA-012', 'Kota Bitung');
        $province->createCity('ID-SA-013', 'Kota Kotamobagu');
        $province->createCity('ID-SA-014', 'Kota Manado');
        $province->createCity('ID-SA-015', 'Kota Tomohon');
    }

    public function createIdSbCities(Province $province)
    {
        $province->createCity('ID-SB-001', 'Kab. Agam');
        $province->createCity('ID-SB-002', 'Kab. Dharmasraya');
        $province->createCity('ID-SB-003', 'Kab. Kepulauan Mentawai');
        $province->createCity('ID-SB-004', 'Kab. Lima Puluh Kota');
        $province->createCity('ID-SB-005', 'Kab. Padang Pariaman');
        $province->createCity('ID-SB-006', 'Kab. Pasaman');
        $province->createCity('ID-SB-007', 'Kab. Pasaman Barat');
        $province->createCity('ID-SB-008', 'Kab. Pesisir Selatan');
        $province->createCity('ID-SB-009', 'Kab. Sijunjung');
        $province->createCity('ID-SB-010', 'Kab. Solok');
        $province->createCity('ID-SB-011', 'Kab. Solok Selatan');
        $province->createCity('ID-SB-012', 'Kab. Tanah Datar');
        $province->createCity('ID-SB-013', 'Kota Bukittinggi');
        $province->createCity('ID-SB-014', 'Kota Padang');
        $province->createCity('ID-SB-015', 'Kota Padangpanjang');
        $province->createCity('ID-SB-016', 'Kota Pariaman');
        $province->createCity('ID-SB-017', 'Kota Payakumbuh');
        $province->createCity('ID-SB-018', 'Kota Sawahlunto');
        $province->createCity('ID-SB-019', 'Kota Solok');
    }

    public function createIdSsCities(Province $province)
    {
        $province->createCity('ID-SS-001', 'Kab. Banyuasin');
        $province->createCity('ID-SS-002', 'Kab. Empat Lawang');
        $province->createCity('ID-SS-003', 'Kab. Lahat');
        $province->createCity('ID-SS-004', 'Kab. Muara Enim');
        $province->createCity('ID-SS-005', 'Kab. Musi Banyuasin');
        $province->createCity('ID-SS-006', 'Kab. Musi Rawas');
        $province->createCity('ID-SS-007', 'Kab. Musi Rawas Utara');
        $province->createCity('ID-SS-008', 'Kab. Ogan Ilir');
        $province->createCity('ID-SS-009', 'Kab. Ogan Komering Ilir');
        $province->createCity('ID-SS-010', 'Kab. Ogan Komering Ulu');
        $province->createCity('ID-SS-011', 'Kab. Ogan Komering Ulu Selatan');
        $province->createCity('ID-SS-012', 'Kab. Ogan Komering Ulu Timur');
        $province->createCity('ID-SS-013', 'Kab. Penukal Abab Lematang Ilir');
        $province->createCity('ID-SS-014', 'Kota Lubuklinggau');
        $province->createCity('ID-SS-015', 'Kota Pagar Alam');
        $province->createCity('ID-SS-016', 'Kota Palembang');
        $province->createCity('ID-SS-017', 'Kota Prabumulih');
    }

    public function createIdSuCities(Province $province)
    {
        $province->createCity('ID-SU-001', 'Kab. Asahan');
        $province->createCity('ID-SU-002', 'Kab. Batu Bara');
        $province->createCity('ID-SU-003', 'Kab. Dairi');
        $province->createCity('ID-SU-004', 'Kab. Deli Serdang');
        $province->createCity('ID-SU-005', 'Kab. Humbang Hasundutan');
        $province->createCity('ID-SU-006', 'Kab. Karo');
        $province->createCity('ID-SU-007', 'Kab. Labuhanbatu');
        $province->createCity('ID-SU-008', 'Kab. Labuhanbatu Selatan');
        $province->createCity('ID-SU-009', 'Kab. Labuhanbatu Utara');
        $province->createCity('ID-SU-010', 'Kab. Langkat');
        $province->createCity('ID-SU-011', 'Kab. Mandailing Natal');
        $province->createCity('ID-SU-012', 'Kab. Nias');
        $province->createCity('ID-SU-013', 'Kab. Nias Barat');
        $province->createCity('ID-SU-014', 'Kab. Nias Selatan');
        $province->createCity('ID-SU-015', 'Kab. Nias Lawas');
        $province->createCity('ID-SU-016', 'Kab. Padang Lawas');
        $province->createCity('ID-SU-017', 'Kab. Padang Lawas Utara');
        $province->createCity('ID-SU-018', 'Kab. Pakpak Bharat');
        $province->createCity('ID-SU-019', 'Kab. Samosir');
        $province->createCity('ID-SU-020', 'Kab. Serdang Berdagai');
        $province->createCity('ID-SU-021', 'Kab. Simalungun');
        $province->createCity('ID-SU-022', 'Kab. Tapanuli Selatan');
        $province->createCity('ID-SU-023', 'Kab. Tapanuli Tengah');
        $province->createCity('ID-SU-024', 'Kab. Tapanuli Utara');
        $province->createCity('ID-SU-025', 'Kab. Toba Samosir');
        $province->createCity('ID-SU-026', 'Kota Binjai');
        $province->createCity('ID-SU-027', 'Kota Gunungsitoli');
        $province->createCity('ID-SU-028', 'Kota Medan');
        $province->createCity('ID-SU-029', 'Kota Padangsidempuan');
        $province->createCity('ID-SU-030', 'Kota Pematangsiantar');
        $province->createCity('ID-SU-031', 'Kota Sibolga');
        $province->createCity('ID-SU-032', 'Kota Tanjungbalai');
        $province->createCity('ID-SU-033', 'Kota Tebing Tinggi');
    }

    public function createIdYoCities(Province $province)
    {
        $province->createCity('ID-YO-001', 'Kab. Bantul');
        $province->createCity('ID-YO-002', 'Kab. Gunungkindul');
        $province->createCity('ID-YO-003', 'Kab. Kulon Progo');
        $province->createCity('ID-YO-004', 'Kab. Sleman');
        $province->createCity('ID-YO-005', 'Kota Yogyakarta');
    }
}
