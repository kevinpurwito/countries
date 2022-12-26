<?php

namespace Kevinpurwito\LaravelCountry\Tests\Unit;

use Kevinpurwito\LaravelCountry\Database\Seeders\CountriesSeeder;
use Kevinpurwito\LaravelCountry\Database\Seeders\IdCitiesSeeder;
use Kevinpurwito\LaravelCountry\Database\Seeders\IdDistrictsSeeder;
use Kevinpurwito\LaravelCountry\Database\Seeders\IdProvincesSeeder;
use Kevinpurwito\LaravelCountry\Models\City;
use Kevinpurwito\LaravelCountry\Models\Country;
use Kevinpurwito\LaravelCountry\Models\District;
use Kevinpurwito\LaravelCountry\Models\Province;
use Kevinpurwito\LaravelCountry\Tests\TestCase;

class IndonesiaTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        (new CountriesSeeder())->run();
        (new IdProvincesSeeder())->run();
        (new IdCitiesSeeder())->run();
    }

    /** @test */
    public function it_has_many_provinces(): void
    {
        $country = Country::findByIso3('IDN'); // Indonesia
        $provinceCount = $country->provinces()->count();
        $this->assertTrue($provinceCount == 34);

        $province = $country->provinces()->first();
        $this->assertTrue($province instanceof Province);
    }

    /** @test */
    public function it_has_many_cities(): void
    {
        $country = Country::findByIso3('IDN'); // Indonesia
        $cityCount = $country->cities()->count();
        $this->assertTrue($cityCount == 514);

        $city = $country->cities()->first();
        $this->assertTrue($city instanceof City);

        $city = $country->provinces()->first()->cities()->first();
        $this->assertTrue($city instanceof City);
    }

    /** @test */
    public function it_belongs_to_country(): void
    {
        $province = Province::first();
        $this->assertTrue($province->country instanceof Country);

        $city = City::first();
        $this->assertTrue($city->country instanceof Country);
    }

    /** @test */
    public function it_belongs_to_province(): void
    {
        $city = City::first();
        $this->assertTrue($city->province instanceof Province);
    }

    /** @test */
    public function it_has_districts(): void
    {
        (new IdDistrictsSeeder())->run();

        $country = Country::findByIso3('IDN'); // Indonesia
        $districtCount = $country->districts()->count();
        $this->assertTrue($districtCount == 7241);

        $district = $country->districts()->first();
        $this->assertTrue($district instanceof District);

        $district = $country->provinces()->first()->districts()->first();
        $this->assertTrue($district instanceof District);

        $district = $country->cities()->first()->districts()->first();
        $this->assertTrue($district instanceof District);

        $this->assertTrue($district->country instanceof Country);
        $this->assertTrue($district->province instanceof Province);
    }
}
