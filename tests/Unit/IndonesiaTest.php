<?php

namespace Kevinpurwito\LaravelCountry\Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Kevinpurwito\LaravelCountry\Database\Seeders\CountrySeeder;
use Kevinpurwito\LaravelCountry\Database\Seeders\IndonesiaSeeder;
use Kevinpurwito\LaravelCountry\Models\City;
use Kevinpurwito\LaravelCountry\Models\Country;
use Kevinpurwito\LaravelCountry\Models\Province;
use Kevinpurwito\LaravelCountry\Tests\TestCase;

class IndonesiaTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        (new CountrySeeder())->run();
        (new IndonesiaSeeder())->run();
    }

    /** @test */
    public function it_has_many_provinces()
    {
        $country = Country::findByIso3('IDN'); // Indonesia
        $provinceCount = $country->provinces()->count();
        $this->assertTrue($provinceCount == 34);

        $province = $country->provinces()->first();
        $this->assertTrue($province instanceof Province);
    }

    /** @test */
    public function it_has_many_cities()
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
    public function it_belongs_to_country()
    {
        $province = Province::first();
        $this->assertTrue($province->country instanceof Country);

        $city = City::first();
        $this->assertTrue($city->country instanceof Country);
    }

    /** @test */
    public function it_belongs_to_province()
    {
        $city = City::first();
        $this->assertTrue($city->province instanceof Province);
    }
}
