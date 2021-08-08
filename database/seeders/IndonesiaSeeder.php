<?php

namespace Kevinpurwito\LaravelCountry\Database\Seeders;

use Illuminate\Database\Seeder;
use Kevinpurwito\LaravelCountry\Models\Country;
use Kevinpurwito\LaravelCountry\Models\Province;

class IndonesiaSeeder extends Seeder
{
    public function run()
    {
        $country = Country::findByIso3('IDN'); // Indonesia

        $this->createIdProvinces($country);
    }

    public function createIdProvinces(Country $country)
    {
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
    }

    public function createIdAcCities(Province $province)
    {
        $province->createCity('ID-AC-001', 'Kabupaten Aceh Barat');
        $province->createCity('ID-AC-002', 'Kabupaten Aceh Barat Daya');
        $province->createCity('ID-AC-003', 'Kabupaten Aceh Besar');
        $province->createCity('ID-AC-004', 'Kabupaten Aceh Jaya');
        $province->createCity('ID-AC-005', 'Kabupaten Aceh Selatan');
        $province->createCity('ID-AC-006', 'Kabupaten Aceh Singkil');
        $province->createCity('ID-AC-007', 'Kabupaten Aceh Tamiang');
        $province->createCity('ID-AC-008', 'Kabupaten Aceh Tengah');
        $province->createCity('ID-AC-009', 'Kabupaten Aceh Tenggaran');
        $province->createCity('ID-AC-010', 'Kabupaten Aceh Timur');
        $province->createCity('ID-AC-011', 'Kabupaten Aceh Utara');
        $province->createCity('ID-AC-012', 'Kabupaten Bener Meriah');
        $province->createCity('ID-AC-013', 'Kabupaten Bireuen');
        $province->createCity('ID-AC-014', 'Kabupaten Gayo Lues');
        $province->createCity('ID-AC-015', 'Kabupaten Nagan Raya');
        $province->createCity('ID-AC-016', 'Kabupaten Pidie');
        $province->createCity('ID-AC-017', 'Kabupaten Pidie Jaya');
        $province->createCity('ID-AC-018', 'Kabupaten Simeulue');
        $province->createCity('ID-AC-019', 'Kota Banda Aceh');
        $province->createCity('ID-AC-020', 'Kota Langsa');
        $province->createCity('ID-AC-021', 'Kota Lhokseumawe');
        $province->createCity('ID-AC-022', 'Kota Sabang');
        $province->createCity('ID-AC-023', 'Kota Subulussalam');
    }

    public function createIdBtCities(Province $province)
    {
        $province->createCity('ID-BT-001', 'Kabupaten Lebak');
        $province->createCity('ID-BT-002', 'Kabupaten Pandeglang');
        $province->createCity('ID-BT-003', 'Kabupaten Serang');
        $province->createCity('ID-BT-004', 'Kabupaten Tangerang');
        $province->createCity('ID-BT-005', 'Kota Cilegon');
        $province->createCity('ID-BT-006', 'Kota Serang');
        $province->createCity('ID-BT-007', 'Kota Tangerang');
        $province->createCity('ID-BT-008', 'Kota Tangerang Selatan');
    }

    public function createIdBeCities(Province $province)
    {
        $province->createCity('ID-BE-001', 'Kabupaten Bengkulu Selatan');
        $province->createCity('ID-BE-002', 'Kabupaten Bengkulu Tengah');
        $province->createCity('ID-BE-003', 'Kabupaten Bengkulu Utara');
        $province->createCity('ID-BE-004', 'Kabupaten Kaur');
        $province->createCity('ID-BE-005', 'Kabupaten Kepahiang');
        $province->createCity('ID-BE-006', 'Kabupaten Lebong');
        $province->createCity('ID-BE-007', 'Kabupaten Mukomuko');
        $province->createCity('ID-BE-008', 'Kabupaten Rejang Lebong');
        $province->createCity('ID-BE-009', 'Kabupaten Seluma');
        $province->createCity('ID-BE-010', 'Kota Bengkulu');
    }

    public function createIdGoCities(Province $province)
    {
        $province->createCity('ID-GO-001', 'Kabupaten Boalemo');
        $province->createCity('ID-GO-002', 'Kabupaten Bone Bolango');
        $province->createCity('ID-GO-003', 'Kabupaten Gorontalo');
        $province->createCity('ID-GO-004', 'Kabupaten Gorontalo Utara');
        $province->createCity('ID-GO-005', 'Kabupaten Pohuwato');
        $province->createCity('ID-GO-006', 'Kota Gorontalo');
    }

    public function createIdJkCities(Province $province)
    {
        $province->createCity('ID-JK-001', 'Kota Administrasi Jakarta Pusat');
        $province->createCity('ID-JK-002', 'Kota Administrasi Jakarta Barat');
        $province->createCity('ID-JK-003', 'Kota Administrasi Jakarta Selatan');
        $province->createCity('ID-JK-004', 'Kota Administrasi Jakarta Timur');
        $province->createCity('ID-JK-005', 'Kota Administrasi Jakarta Utara');
        $province->createCity('ID-JK-006', 'Kabupaten Administrasi Kepulauan Seribu');
    }

    public function createIdJaCities(Province $province)
    {
        $province->createCity('ID-JA-001', 'Kabupaten Batanghari');
        $province->createCity('ID-JA-002', 'Kabupaten Bungo');
        $province->createCity('ID-JA-003', 'Kabupaten Kerinci');
        $province->createCity('ID-JA-004', 'Kabupaten Merangin');
        $province->createCity('ID-JA-005', 'Kabupaten Muaro Jambi');
        $province->createCity('ID-JA-006', 'Kabupaten Sarolangun');
        $province->createCity('ID-JA-007', 'Kabupaten Tanjung Jabung Barat');
        $province->createCity('ID-JA-008', 'Kabupaten Tanjung Jabung Timur');
        $province->createCity('ID-JA-009', 'Kabupaten Tebo');
        $province->createCity('ID-JA-010', 'Kota Jambi');
        $province->createCity('ID-JA-011', 'Kota Sungaipenuh');
    }

    public function createIdJbCities(Province $province)
    {
        $province->createCity('ID-JB-001', 'Kabupaten Bandung');
        $province->createCity('ID-JB-002', 'Kabupaten Bandung Barat');
        $province->createCity('ID-JB-003', 'Kabupaten Bekasi');
        $province->createCity('ID-JB-004', 'Kabupaten Bogor');
        $province->createCity('ID-JB-005', 'Kabupaten Ciamis');
        $province->createCity('ID-JB-006', 'Kabupaten Cianjur');
        $province->createCity('ID-JB-007', 'Kabupaten Cirebon');
        $province->createCity('ID-JB-008', 'Kabupaten Garut');
        $province->createCity('ID-JB-009', 'Kabupaten Indramayu');
        $province->createCity('ID-JB-010', 'Kabupaten Karawang');
        $province->createCity('ID-JB-011', 'Kabupaten Kuningan');
        $province->createCity('ID-JB-012', 'Kabupaten Majalengka');
        $province->createCity('ID-JB-013', 'Kabupaten Pangandaran');
        $province->createCity('ID-JB-014', 'Kabupaten Purwakarta');
        $province->createCity('ID-JB-015', 'Kabupaten Subang');
        $province->createCity('ID-JB-016', 'Kabupaten Sukabumi');
        $province->createCity('ID-JB-017', 'Kabupaten Sumedang');
        $province->createCity('ID-JB-018', 'Kabupaten Tasikmalaya');
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
        $province->createCity('ID-JT-001', 'Kabupaten Banjarnegara');
        $province->createCity('ID-JT-002', 'Kabupaten Banyumas');
        $province->createCity('ID-JT-003', 'Kabupaten Batang');
        $province->createCity('ID-JT-004', 'Kabupaten Blora');
        $province->createCity('ID-JT-005', 'Kabupaten Boyolali');
        $province->createCity('ID-JT-006', 'Kabupaten Brebes');
        $province->createCity('ID-JT-007', 'Kabupaten Cilacap');
        $province->createCity('ID-JT-008', 'Kabupaten Demak');
        $province->createCity('ID-JT-009', 'Kabupaten Grobogan');
        $province->createCity('ID-JT-010', 'Kabupaten Jepara');
        $province->createCity('ID-JT-011', 'Kabupaten Karanganyar');
        $province->createCity('ID-JT-012', 'Kabupaten Kebumen');
        $province->createCity('ID-JT-013', 'Kabupaten Kendal');
        $province->createCity('ID-JT-014', 'Kabupaten Klaten');
        $province->createCity('ID-JT-015', 'Kabupaten Kudus');
        $province->createCity('ID-JT-016', 'Kabupaten Magelang');
        $province->createCity('ID-JT-017', 'Kabupaten Pati');
        $province->createCity('ID-JT-018', 'Kabupaten Pekalongan');
        $province->createCity('ID-JT-019', 'Kabupaten Pemalang');
        $province->createCity('ID-JT-020', 'Kabupaten Purbalingga');
        $province->createCity('ID-JT-021', 'Kabupaten Purworejo');
        $province->createCity('ID-JT-022', 'Kabupaten Rembang');
        $province->createCity('ID-JT-023', 'Kabupaten Semarang');
        $province->createCity('ID-JT-024', 'Kabupaten Sragen');
        $province->createCity('ID-JT-025', 'Kabupaten Sukoharjo');
        $province->createCity('ID-JT-026', 'Kabupaten Tegal');
        $province->createCity('ID-JT-027', 'Kabupaten Temanggung');
        $province->createCity('ID-JT-028', 'Kabupaten Wonogiri');
        $province->createCity('ID-JT-029', 'Kabupaten Wonosobo');
        $province->createCity('ID-JT-030', 'Kota Magelang');
        $province->createCity('ID-JT-031', 'Kota Pekalongan');
        $province->createCity('ID-JT-032', 'Kota Salatiga');
        $province->createCity('ID-JT-033', 'Kota Semarang');
        $province->createCity('ID-JT-034', 'Kota Surakarta');
        $province->createCity('ID-JT-035', 'Kota Tegal');
    }

    public function createIdJiCities(Province $province)
    {
        $province->createCity('ID-JI-001', 'Kabupaten Bangkalan');
        $province->createCity('ID-JI-002', 'Kabupaten Banyuwangi');
        $province->createCity('ID-JI-003', 'Kabupaten Blitar');
        $province->createCity('ID-JI-004', 'Kabupaten Bojonegoro');
        $province->createCity('ID-JI-005', 'Kabupaten Bondowoso');
        $province->createCity('ID-JI-006', 'Kabupaten Gresik');
        $province->createCity('ID-JI-007', 'Kabupaten Jember');
        $province->createCity('ID-JI-008', 'Kabupaten Jombang');
        $province->createCity('ID-JI-009', 'Kabupaten Kediri');
        $province->createCity('ID-JI-010', 'Kabupaten Lamongan');
        $province->createCity('ID-JI-011', 'Kabupaten Lumajang');
        $province->createCity('ID-JI-012', 'Kabupaten Madiun');
        $province->createCity('ID-JI-013', 'Kabupaten Magetan');
        $province->createCity('ID-JI-014', 'Kabupaten Malang');
        $province->createCity('ID-JI-015', 'Kabupaten Mojokerto');
        $province->createCity('ID-JI-016', 'Kabupaten Nganjuk');
        $province->createCity('ID-JI-017', 'Kabupaten Ngawi');
        $province->createCity('ID-JI-018', 'Kabupaten Pacitan');
        $province->createCity('ID-JI-019', 'Kabupaten Pamekasan');
        $province->createCity('ID-JI-020', 'Kabupaten Pasuruan');
        $province->createCity('ID-JI-021', 'Kabupaten Ponorogo');
        $province->createCity('ID-JI-022', 'Kabupaten Probolinggo');
        $province->createCity('ID-JI-023', 'Kabupaten Sampang');
        $province->createCity('ID-JI-024', 'Kabupaten Sidoarjo');
        $province->createCity('ID-JI-025', 'Kabupaten Situbondo');
        $province->createCity('ID-JI-026', 'Kabupaten Sumenep');
        $province->createCity('ID-JI-027', 'Kabupaten Trenggalek');
        $province->createCity('ID-JI-028', 'Kabupaten Tuban');
        $province->createCity('ID-JI-029', 'Kabupaten Tulungagung');
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
        $province->createCity('ID-KB-001', 'Kabupaten Bengkayang');
        $province->createCity('ID-KB-002', 'Kabupaten Kapuas Hulu');
        $province->createCity('ID-KB-003', 'Kabupaten Kayong Utara');
        $province->createCity('ID-KB-004', 'Kabupaten Ketapang');
        $province->createCity('ID-KB-005', 'Kabupaten Kubu Raya');
        $province->createCity('ID-KB-006', 'Kabupaten Landak');
        $province->createCity('ID-KB-007', 'Kabupaten Melawi');
        $province->createCity('ID-KB-008', 'Kabupaten Mempawah');
        $province->createCity('ID-KB-009', 'Kabupaten Sambas');
        $province->createCity('ID-KB-010', 'Kabupaten Sanggau');
        $province->createCity('ID-KB-011', 'Kabupaten Sekadau');
        $province->createCity('ID-KB-012', 'Kabupaten Sintang');
        $province->createCity('ID-KB-013', 'Kota Pontianak');
        $province->createCity('ID-KB-014', 'Kota Singkawang');
    }

    public function createIdKsCities(Province $province)
    {
        $province->createCity('ID-KS-001', 'Kabupaten Balangan');
        $province->createCity('ID-KS-002', 'Kabupaten Banjar');
        $province->createCity('ID-KS-003', 'Kabupaten Barito Kuala');
        $province->createCity('ID-KS-004', 'Kabupaten Hulu Sungai Selatan');
        $province->createCity('ID-KS-005', 'Kabupaten Hulu Sungai Tengah');
        $province->createCity('ID-KS-006', 'Kabupaten Hulu Sungai Utara');
        $province->createCity('ID-KS-007', 'Kabupaten Kotabaru');
        $province->createCity('ID-KS-008', 'Kabupaten Tabalong');
        $province->createCity('ID-KS-009', 'Kabupaten Tanah Bumbu');
        $province->createCity('ID-KS-010', 'Kabupaten Tanah Laut');
        $province->createCity('ID-KS-011', 'Kabupaten Tapin');
        $province->createCity('ID-KS-012', 'Kota Banjarbaru');
        $province->createCity('ID-KS-013', 'Kota Banjarmasin');
    }

    public function createIdKtCities(Province $province)
    {
        $province->createCity('ID-KT-001', 'Kabupaten Barito Selatan');
        $province->createCity('ID-KT-002', 'Kabupaten Barito Timur');
        $province->createCity('ID-KT-003', 'Kabupaten Barito Utara');
        $province->createCity('ID-KT-004', 'Kabupaten Gunung Mas');
        $province->createCity('ID-KT-005', 'Kabupaten Kapuas');
        $province->createCity('ID-KT-006', 'Kabupaten Katingan');
        $province->createCity('ID-KT-007', 'Kabupaten Kotawaringin Barat');
        $province->createCity('ID-KT-008', 'Kabupaten Kotawaringin Timur');
        $province->createCity('ID-KT-009', 'Kabupaten Lamandau');
        $province->createCity('ID-KT-010', 'Kabupaten Murung Raya');
        $province->createCity('ID-KT-011', 'Kabupaten Pulang Pisau');
        $province->createCity('ID-KT-012', 'Kabupaten Sukamara');
        $province->createCity('ID-KT-013', 'Kabupaten Seruyan');
        $province->createCity('ID-KT-014', 'Kota Palangka Raya');
    }

    public function createIdKiCities(Province $province)
    {
        $province->createCity('ID-KI-001', 'Kabupaten Berau');
        $province->createCity('ID-KI-002', 'Kabupaten Kutai Barat');
        $province->createCity('ID-KI-003', 'Kabupaten Kutai Kartanegara');
        $province->createCity('ID-KI-004', 'Kabupaten Kutai Timur');
        $province->createCity('ID-KI-005', 'Kabupaten Mahakam Ulu');
        $province->createCity('ID-KI-006', 'Kabupaten Paser');
        $province->createCity('ID-KI-007', 'Kabupaten Penajam Paser Utara');
        $province->createCity('ID-KI-008', 'Kota Balikpapan');
        $province->createCity('ID-KI-009', 'Kota Bontang');
        $province->createCity('ID-KI-010', 'Kota Samarinda');
    }

    public function createIdKuCities(Province $province)
    {
        $province->createCity('ID-KU-001', 'Kabupaten Bulungan');
        $province->createCity('ID-KU-002', 'Kabupaten Malinau');
        $province->createCity('ID-KU-003', 'Kabupaten Nunukan');
        $province->createCity('ID-KU-004', 'Kabupaten Tana Tidung');
        $province->createCity('ID-KU-005', 'Kota Tarakan');
    }

    public function createIdBbCities(Province $province)
    {
        $province->createCity('ID-BB-001', 'Kabupaten Bangka');
        $province->createCity('ID-BB-002', 'Kabupaten Belitung');
        $province->createCity('ID-BB-003', 'Kabupaten Bangka Barat');
        $province->createCity('ID-BB-004', 'Kabupaten Bangka Tengah');
        $province->createCity('ID-BB-005', 'Kabupaten Bangka Selatan');
        $province->createCity('ID-BB-006', 'Kabupaten Belitung Timur');
        $province->createCity('ID-BB-007', 'Kota Pangkal Pinang');
    }

    public function createIdKrCities(Province $province)
    {
        $province->createCity('ID-KR-001', 'Kabupaten Bintan');
        $province->createCity('ID-KR-002', 'Kabupaten Karimun');
        $province->createCity('ID-KR-003', 'Kabupaten Kepulauan Anambas');
        $province->createCity('ID-KR-004', 'Kabupaten Lingga');
        $province->createCity('ID-KR-005', 'Kabupaten Natuna');
        $province->createCity('ID-KR-006', 'Kota Batam');
        $province->createCity('ID-KR-007', 'Kota Tanjung Pinang');
    }

    public function createIdLaCities(Province $province)
    {
        $province->createCity('ID-LA-001', 'Kabupaten Lampung Barat');
        $province->createCity('ID-LA-002', 'Kabupaten Lampung Selatan');
        $province->createCity('ID-LA-003', 'Kabupaten Lampung Tengah');
        $province->createCity('ID-LA-004', 'Kabupaten Lampung Timur');
        $province->createCity('ID-LA-005', 'Kabupaten Lampung Utara');
        $province->createCity('ID-LA-006', 'Kabupaten Mesuji');
        $province->createCity('ID-LA-007', 'Kabupaten Pesawaran');
        $province->createCity('ID-LA-008', 'Kabupaten Pesisir Barat');
        $province->createCity('ID-LA-009', 'Kabupaten Pringsewu');
        $province->createCity('ID-LA-010', 'Kabupaten Tanggamus');
        $province->createCity('ID-LA-011', 'Kabupaten Tulang Bawang');
        $province->createCity('ID-LA-012', 'Kabupaten Tulang Bawang Barat');
        $province->createCity('ID-LA-013', 'Kabupaten Way Kanan');
        $province->createCity('ID-LA-014', 'Kota Bandar Lampung');
        $province->createCity('ID-LA-015', 'Kota Metro');
    }

    public function createIdMaCities(Province $province)
    {
        $province->createCity('ID-MA-001', 'Kabupaten Buru');
        $province->createCity('ID-MA-002', 'Kabupaten Buru Selatan');
        $province->createCity('ID-MA-003', 'Kabupaten Kepulauan Aru');
        $province->createCity('ID-MA-004', 'Kabupaten Maluku Barat Daya');
        $province->createCity('ID-MA-005', 'Kabupaten Maluku Tengah');
        $province->createCity('ID-MA-006', 'Kabupaten Maluku Tenggara');
        $province->createCity('ID-MA-007', 'Kabupaten Kepulauan Tanimbar');
        $province->createCity('ID-MA-008', 'Kabupaten Seram Bagian Barat');
        $province->createCity('ID-MA-009', 'Kabupaten Seram Bagian Timur');
        $province->createCity('ID-MA-010', 'Kota Ambon');
        $province->createCity('ID-MA-011', 'Kota Tual');
    }

    public function createIdMuCities(Province $province)
    {
        $province->createCity('ID-MU-001', 'Kabupaten Halmahera Barat');
        $province->createCity('ID-MU-002', 'Kabupaten Halmahera Tengah');
        $province->createCity('ID-MU-003', 'Kabupaten Halmahera Timur');
        $province->createCity('ID-MU-004', 'Kabupaten Halmahera Selatan');
        $province->createCity('ID-MU-005', 'Kabupaten Halmahera Utara');
        $province->createCity('ID-MU-006', 'Kabupaten Kepulauan Sula');
        $province->createCity('ID-MU-007', 'Kabupaten Pulau Morotai');
        $province->createCity('ID-MU-008', 'Kabupaten Pulau Taliabu');
        $province->createCity('ID-MU-009', 'Kota Ternate');
        $province->createCity('ID-MU-010', 'Kota Tidore Kepulauan');
    }

    public function createIdBaCities(Province $province)
    {
        $province->createCity('ID-BA-001', 'Kabupaten Badung');
        $province->createCity('ID-BA-002', 'Kabupaten Bangli');
        $province->createCity('ID-BA-003', 'Kabupaten Buleleng');
        $province->createCity('ID-BA-004', 'Kabupaten Gianyar');
        $province->createCity('ID-BA-005', 'Kabupaten Jembrana');
        $province->createCity('ID-BA-006', 'Kabupaten Karangasem');
        $province->createCity('ID-BA-007', 'Kabupaten Klungkung');
        $province->createCity('ID-BA-008', 'Kabupaten Tabanan');
        $province->createCity('ID-BA-009', 'Kota Denpasar');
    }

    public function createIdNbCities(Province $province)
    {
        $province->createCity('ID-NB-001', 'Kabupaten Bima');
        $province->createCity('ID-NB-002', 'Kabupaten Dompu');
        $province->createCity('ID-NB-003', 'Kabupaten Lombok Barat');
        $province->createCity('ID-NB-004', 'Kabupaten Lombok Tengah');
        $province->createCity('ID-NB-005', 'Kabupaten Lombok Timur');
        $province->createCity('ID-NB-006', 'Kabupaten Lombok Utara');
        $province->createCity('ID-NB-007', 'Kabupaten Sumbawa');
        $province->createCity('ID-NB-008', 'Kabupaten Sumbawa Barat');
        $province->createCity('ID-NB-009', 'Kota Bima');
        $province->createCity('ID-NB-010', 'Kota Mataram');
    }

    public function createIdNtCities(Province $province)
    {
        $province->createCity('ID-NT-001', 'Kabupaten Alor');
        $province->createCity('ID-NT-002', 'Kabupaten Belu');
        $province->createCity('ID-NT-003', 'Kabupaten Ende');
        $province->createCity('ID-NT-004', 'Kabupaten Flores Timur');
        $province->createCity('ID-NT-005', 'Kabupaten Kupang');
        $province->createCity('ID-NT-006', 'Kabupaten Lembata');
        $province->createCity('ID-NT-007', 'Kabupaten Malaka');
        $province->createCity('ID-NT-008', 'Kabupaten Manggarai');
        $province->createCity('ID-NT-009', 'Kabupaten Manggarai Barat');
        $province->createCity('ID-NT-010', 'Kabupaten Manggarai Timur');
        $province->createCity('ID-NT-011', 'Kabupaten Nagekeo');
        $province->createCity('ID-NT-012', 'Kabupaten Ngada');
        $province->createCity('ID-NT-013', 'Kabupaten Rote Ndao');
        $province->createCity('ID-NT-014', 'Kabupaten Sabu Raijua');
        $province->createCity('ID-NT-015', 'Kabupaten Sikka');
        $province->createCity('ID-NT-016', 'Kabupaten Sumba Barat');
        $province->createCity('ID-NT-017', 'Kabupaten Sumba Barat Daya');
        $province->createCity('ID-NT-018', 'Kabupaten Sumba Tengah');
        $province->createCity('ID-NT-019', 'Kabupaten Sumba Timur');
        $province->createCity('ID-NT-020', 'Kabupaten Timor Tengah Selatan');
        $province->createCity('ID-NT-021', 'Kabupaten Timor Tengah Utara');
        $province->createCity('ID-NT-022', 'Kota Kupang');
    }

    public function createIdPaCities(Province $province)
    {
        $province->createCity('ID-PA-001', 'Kabupaten Asmat');
        $province->createCity('ID-PA-002', 'Kabupaten Biak Numfor');
        $province->createCity('ID-PA-003', 'Kabupaten Boven Digoel');
        $province->createCity('ID-PA-004', 'Kabupaten Deiyai');
        $province->createCity('ID-PA-005', 'Kabupaten Dogiyai');
        $province->createCity('ID-PA-006', 'Kabupaten Intan Jaya');
        $province->createCity('ID-PA-007', 'Kabupaten Jayapura');
        $province->createCity('ID-PA-008', 'Kabupaten Jayawijaya');
        $province->createCity('ID-PA-009', 'Kabupaten Keerom');
        $province->createCity('ID-PA-010', 'Kabupaten Kepulauan Yapen');
        $province->createCity('ID-PA-011', 'Kabupaten Lanny Jaya');
        $province->createCity('ID-PA-012', 'Kabupaten Mamberamo Raya');
        $province->createCity('ID-PA-013', 'Kabupaten Mamberamo Tengah');
        $province->createCity('ID-PA-014', 'Kabupaten Mappi');
        $province->createCity('ID-PA-015', 'Kabupaten Merauke');
        $province->createCity('ID-PA-016', 'Kabupaten Mimika');
        $province->createCity('ID-PA-017', 'Kabupaten Nabire');
        $province->createCity('ID-PA-018', 'Kabupaten Nduga');
        $province->createCity('ID-PA-019', 'Kabupaten Paniai');
        $province->createCity('ID-PA-020', 'Kabupaten Pegunungan Bintang');
        $province->createCity('ID-PA-021', 'Kabupaten Puncak');
        $province->createCity('ID-PA-022', 'Kabupaten Puncak Jaya');
        $province->createCity('ID-PA-023', 'Kabupaten Sarmi');
        $province->createCity('ID-PA-024', 'Kabupaten Supiori');
        $province->createCity('ID-PA-025', 'Kabupaten Tolikara');
        $province->createCity('ID-PA-026', 'Kabupaten Waropen');
        $province->createCity('ID-PA-027', 'Kabupaten Yahukimo');
        $province->createCity('ID-PA-028', 'Kabupaten Yalimo');
        $province->createCity('ID-PA-029', 'Kota Jayapura');
    }

    public function createIdPbCities(Province $province)
    {
        $province->createCity('ID-PB-001', 'Kabupaten Fakfak');
        $province->createCity('ID-PB-002', 'Kabupaten Kaimana');
        $province->createCity('ID-PB-003', 'Kabupaten Manokwari');
        $province->createCity('ID-PB-004', 'Kabupaten Manokwari Selatan');
        $province->createCity('ID-PB-005', 'Kabupaten Maybrat');
        $province->createCity('ID-PB-006', 'Kabupaten Pegunungan Arfak');
        $province->createCity('ID-PB-007', 'Kabupaten Raja Ampat');
        $province->createCity('ID-PB-008', 'Kabupaten Sorong');
        $province->createCity('ID-PB-009', 'Kabupaten Sorong Selatan');
        $province->createCity('ID-PB-010', 'Kabupaten Tambrauw');
        $province->createCity('ID-PB-011', 'Kabupaten Teluk Bintuni');
        $province->createCity('ID-PB-012', 'Kabupaten Teluk Wondama');
        $province->createCity('ID-PB-013', 'Kota Sorong');
    }

    public function createIdRiCities(Province $province)
    {
        $province->createCity('ID-RI-001', 'Kabupaten Bengkalis');
        $province->createCity('ID-RI-002', 'Kabupaten Indragiri Hilir');
        $province->createCity('ID-RI-003', 'Kabupaten Indragiri Hulu');
        $province->createCity('ID-RI-004', 'Kabupaten Kampar');
        $province->createCity('ID-RI-005', 'Kabupaten Kepulauan Meranti');
        $province->createCity('ID-RI-006', 'Kabupaten Kuantan Singingi');
        $province->createCity('ID-RI-007', 'Kabupaten Pelalawan');
        $province->createCity('ID-RI-008', 'Kabupaten Rokan Hilir');
        $province->createCity('ID-RI-009', 'Kabupaten Rokan Hulu');
        $province->createCity('ID-RI-010', 'Kabupaten Siak');
        $province->createCity('ID-RI-011', 'Kota Dumai');
        $province->createCity('ID-RI-012', 'Kota Pekanbaru');
    }

    public function createIdSrCities(Province $province)
    {
        $province->createCity('ID-SR-001', 'Kabupaten Majene');
        $province->createCity('ID-SR-002', 'Kabupaten Mamasa');
        $province->createCity('ID-SR-003', 'Kabupaten Mamuju');
        $province->createCity('ID-SR-004', 'Kabupaten Mamuju Tengah');
        $province->createCity('ID-SR-005', 'Kabupaten Pasangkayu');
        $province->createCity('ID-SR-006', 'Kabupaten Polewali Mandar');
    }

    public function createIdSnCities(Province $province)
    {
        $province->createCity('ID-SN-001', 'Kabupaten Bantaeng');
        $province->createCity('ID-SN-002', 'Kabupaten Bamu');
        $province->createCity('ID-SN-003', 'Kabupaten Bone');
        $province->createCity('ID-SN-004', 'Kabupaten Bulukumba');
        $province->createCity('ID-SN-005', 'Kabupaten Enrekang');
        $province->createCity('ID-SN-006', 'Kabupaten Gowa');
        $province->createCity('ID-SN-007', 'Kabupaten Jeneponto');
        $province->createCity('ID-SN-008', 'Kabupaten Kepulauan Selayar');
        $province->createCity('ID-SN-009', 'Kabupaten Luwu');
        $province->createCity('ID-SN-010', 'Kabupaten Luwu Timur');
        $province->createCity('ID-SN-011', 'Kabupaten Luwu Utara');
        $province->createCity('ID-SN-012', 'Kabupaten Maros');
        $province->createCity('ID-SN-013', 'Kabupaten Pangkajene dan Kepulauan');
        $province->createCity('ID-SN-014', 'Kabupaten Pinrang');
        $province->createCity('ID-SN-015', 'Kabupaten Sidenreng Rappang');
        $province->createCity('ID-SN-016', 'Kabupaten Sinjai');
        $province->createCity('ID-SN-017', 'Kabupaten Soppeng');
        $province->createCity('ID-SN-018', 'Kabupaten Takalar');
        $province->createCity('ID-SN-019', 'Kabupaten Tana Toraja');
        $province->createCity('ID-SN-020', 'Kabupaten Toraja Utara');
        $province->createCity('ID-SN-021', 'Kabupaten Wajo');
        $province->createCity('ID-SN-022', 'Kota Makassar');
        $province->createCity('ID-SN-023', 'Kota Palopo');
        $province->createCity('ID-SN-024', 'Kota Parepare');
    }

    public function createIdStCities(Province $province)
    {
        $province->createCity('ID-ST-001', 'Kabupaten Banggai');
        $province->createCity('ID-ST-002', 'Kabupaten Banggai Kepulauan');
        $province->createCity('ID-ST-003', 'Kabupaten Banggai Laut');
        $province->createCity('ID-ST-004', 'Kabupaten Buol');
        $province->createCity('ID-ST-005', 'Kabupaten Donggala');
        $province->createCity('ID-ST-006', 'Kabupaten Morowali');
        $province->createCity('ID-ST-007', 'Kabupaten Morowali Utara');
        $province->createCity('ID-ST-008', 'Kabupaten Parigi Moutong');
        $province->createCity('ID-ST-009', 'Kabupaten Poso');
        $province->createCity('ID-ST-010', 'Kabupaten Sigi');
        $province->createCity('ID-ST-011', 'Kabupaten Tojo Una-Una');
        $province->createCity('ID-ST-012', 'Kabupaten Tolitoli');
        $province->createCity('ID-ST-013', 'Kota Palu');
    }

    public function createIdSgCities(Province $province)
    {
        $province->createCity('ID-SG-001', 'Kabupaten Bombana');
        $province->createCity('ID-SG-002', 'Kabupaten Buton');
        $province->createCity('ID-SG-003', 'Kabupaten Buton Selatan');
        $province->createCity('ID-SG-004', 'Kabupaten Buton Tengah');
        $province->createCity('ID-SG-005', 'Kabupaten Buton Utara');
        $province->createCity('ID-SG-006', 'Kabupaten Kolaka');
        $province->createCity('ID-SG-007', 'Kabupaten Kolaka Timur');
        $province->createCity('ID-SG-008', 'Kabupaten Kolaka Utara');
        $province->createCity('ID-SG-009', 'Kabupaten Konawe');
        $province->createCity('ID-SG-010', 'Kabupaten Konawe Kepulauan');
        $province->createCity('ID-SG-011', 'Kabupaten Konawe Selatan');
        $province->createCity('ID-SG-012', 'Kabupaten Konawe Utara');
        $province->createCity('ID-SG-013', 'Kabupaten Muna');
        $province->createCity('ID-SG-014', 'Kabupaten Muna Barat');
        $province->createCity('ID-SG-015', 'Kabupaten Wakatobi');
        $province->createCity('ID-SG-016', 'Kota Bau-bau');
        $province->createCity('ID-SG-017', 'Kota Kendari');
    }

    public function createIdSaCities(Province $province)
    {
        $province->createCity('ID-SA-001', 'Kabupaten Bolaang Mongondow');
        $province->createCity('ID-SA-002', 'Kabupaten Bolaang Mongondow Selatan');
        $province->createCity('ID-SA-003', 'Kabupaten Bolaang Mongondow Timur');
        $province->createCity('ID-SA-004', 'Kabupaten Bolaang Mongondow Utara');
        $province->createCity('ID-SA-005', 'Kabupaten Kepulauan Sangihe');
        $province->createCity('ID-SA-006', 'Kabupaten Kepulauan Siau Tagulandang Biaro');
        $province->createCity('ID-SA-007', 'Kabupaten Kepulauan Talaud');
        $province->createCity('ID-SA-008', 'Kabupaten Minahasa');
        $province->createCity('ID-SA-009', 'Kabupaten Minahasa Selatan');
        $province->createCity('ID-SA-010', 'Kabupaten Minahasa Tenggara');
        $province->createCity('ID-SA-011', 'Kabupaten Minahasa Utara');
        $province->createCity('ID-SA-012', 'Kota Bitung');
        $province->createCity('ID-SA-013', 'Kota Kotamobagu');
        $province->createCity('ID-SA-014', 'Kota Manado');
        $province->createCity('ID-SA-015', 'Kota Tomohon');
    }

    public function createIdSbCities(Province $province)
    {
        $province->createCity('ID-SB-001', 'Kabupaten Agam');
        $province->createCity('ID-SB-002', 'Kabupaten Dharmasraya');
        $province->createCity('ID-SB-003', 'Kabupaten Kepulauan Mentawai');
        $province->createCity('ID-SB-004', 'Kabupaten Lima Puluh Kota');
        $province->createCity('ID-SB-005', 'Kabupaten Padang Pariaman');
        $province->createCity('ID-SB-006', 'Kabupaten Pasaman');
        $province->createCity('ID-SB-007', 'Kabupaten Pasaman Barat');
        $province->createCity('ID-SB-008', 'Kabupaten Pesisir Selatan');
        $province->createCity('ID-SB-009', 'Kabupaten Sijunjung');
        $province->createCity('ID-SB-010', 'Kabupaten Solok');
        $province->createCity('ID-SB-011', 'Kabupaten Solok Selatan');
        $province->createCity('ID-SB-012', 'Kabupaten Tanah Datar');
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
        $province->createCity('ID-SS-001', 'Kabupaten Banyuasin');
        $province->createCity('ID-SS-002', 'Kabupaten Empat Lawang');
        $province->createCity('ID-SS-003', 'Kabupaten Lahat');
        $province->createCity('ID-SS-004', 'Kabupaten Muara Enim');
        $province->createCity('ID-SS-005', 'Kabupaten Musi Banyuasin');
        $province->createCity('ID-SS-006', 'Kabupaten Musi Rawas');
        $province->createCity('ID-SS-007', 'Kabupaten Musi Rawas Utara');
        $province->createCity('ID-SS-008', 'Kabupaten Ogan Ilir');
        $province->createCity('ID-SS-009', 'Kabupaten Ogan Komering Ilir');
        $province->createCity('ID-SS-010', 'Kabupaten Ogan Komering Ulu');
        $province->createCity('ID-SS-011', 'Kabupaten Ogan Komering Ulu Selatan');
        $province->createCity('ID-SS-012', 'Kabupaten Ogan Komering Ulu Timur');
        $province->createCity('ID-SS-013', 'Kabupaten Penukal Abab Lematang Ilir');
        $province->createCity('ID-SS-014', 'Kota Lubuklinggau');
        $province->createCity('ID-SS-015', 'Kota Pagar Alam');
        $province->createCity('ID-SS-016', 'Kota Palembang');
        $province->createCity('ID-SS-017', 'Kota Prabumulih');
    }

    public function createIdSuCities(Province $province)
    {
        $province->createCity('ID-SU-001', 'Kabupaten Asahan');
        $province->createCity('ID-SU-002', 'Kabupaten Batu Bara');
        $province->createCity('ID-SU-003', 'Kabupaten Dairi');
        $province->createCity('ID-SU-004', 'Kabupaten Deli Serdang');
        $province->createCity('ID-SU-005', 'Kabupaten Humbang Hasundutan');
        $province->createCity('ID-SU-006', 'Kabupaten Karo');
        $province->createCity('ID-SU-007', 'Kabupaten Labuhanbatu');
        $province->createCity('ID-SU-008', 'Kabupaten Labuhanbatu Selatan');
        $province->createCity('ID-SU-009', 'Kabupaten Labuhanbatu Utara');
        $province->createCity('ID-SU-010', 'Kabupaten Langkat');
        $province->createCity('ID-SU-011', 'Kabupaten Mandailing Natal');
        $province->createCity('ID-SU-012', 'Kabupaten Nias');
        $province->createCity('ID-SU-013', 'Kabupaten Nias Barat');
        $province->createCity('ID-SU-014', 'Kabupaten Nias Selatan');
        $province->createCity('ID-SU-015', 'Kabupaten Nias Lawas');
        $province->createCity('ID-SU-016', 'Kabupaten Padang Lawas');
        $province->createCity('ID-SU-017', 'Kabupaten Padang Lawas Utara');
        $province->createCity('ID-SU-018', 'Kabupaten Pakpak Bharat');
        $province->createCity('ID-SU-019', 'Kabupaten Samosir');
        $province->createCity('ID-SU-020', 'Kabupaten Serdang Berdagai');
        $province->createCity('ID-SU-021', 'Kabupaten Simalungun');
        $province->createCity('ID-SU-022', 'Kabupaten Tapanuli Selatan');
        $province->createCity('ID-SU-023', 'Kabupaten Tapanuli Tengah');
        $province->createCity('ID-SU-024', 'Kabupaten Tapanuli Utara');
        $province->createCity('ID-SU-025', 'Kabupaten Toba Samosir');
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
        $province->createCity('ID-YO-001', 'Kabupaten Bantul');
        $province->createCity('ID-YO-002', 'Kabupaten Gunungkindul');
        $province->createCity('ID-YO-003', 'Kabupaten Kulon Progo');
        $province->createCity('ID-YO-004', 'Kabupaten Sleman');
        $province->createCity('ID-YO-005', 'Kota Yogyakarta');
    }
}
