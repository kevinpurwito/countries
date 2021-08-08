<?php

namespace Kevinpurwito\LaravelCountry\Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Kevinpurwito\LaravelCountry\Database\Seeders\CountrySeeder;
use Kevinpurwito\LaravelCountry\Models\Country;
use Kevinpurwito\LaravelCountry\Tests\TestCase;

class CountryTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        (new CountrySeeder)->run();
    }

    /** @test */
    public function it_has_countries()
    {
        $count = Country::count();
        $this->assertTrue($count == 240);
    }

    /** @test */
    public function it_has_indonesia()
    {
        $country = Country::findByName('Indonesia');
        $this->assertTrue($country->name == 'Indonesia');
        $this->assertTrue($country->code == '62');
        $this->assertTrue($country->iso2 == 'ID');
        $this->assertTrue($country->iso3 == 'IDN');
    }

    /** @test */
    public function it_has_popular_column()
    {
        if (config('kp_country.popular_column')) {
            $country = Country::findByName('Indonesia');
            $this->assertTrue($country->popular == 0);
            $country->popular = 1;
            $this->assertTrue($country->popular == 1);
        }
    }

    /** @test */
    public function it_has_order_no_column()
    {
        if (config('kp_country.order_no_column')) {
            $country = Country::findByName('Indonesia');
            $this->assertTrue($country->order_no == 999);
            $country->order_no = 1;
            $this->assertTrue($country->order_no == 1);
        }
    }

    /** @test */
    public function it_shows_by_popular_column()
    {
        if (config('kp_country.popular_column')) {
            Country::whereName('Indonesia')->update(['popular' => 1]);
            Country::whereName('Canada')->update(['popular' => 1]);
            $countries = Country::default()->limit(2)->pluck('name')->toArray();
            $this->assertContains('Indonesia', $countries);
            $this->assertContains('Canada', $countries);
        }
    }

    /** @test */
    public function it_shows_by_order_no_column()
    {
        if (config('kp_country.order_no_column')) {
            Country::whereName('Indonesia')->update(['order_no' => 1]);
            Country::whereName('Canada')->update(['order_no' => 2]);
            $countries = Country::default()->limit(2)->get();
            $this->assertTrue($countries[0]->name == 'Indonesia');
            $this->assertTrue($countries[1]->name == 'Canada');
        }
    }

    /** @test */
    public function it_shows_by_name()
    {
        $countries = Country::whereIn('name', ['Indonesia', 'Canada'])->default()->limit(2)->get();
        $this->assertTrue($countries[0]->name == 'Canada');
        $this->assertTrue($countries[1]->name == 'Indonesia');
    }
}
