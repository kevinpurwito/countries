<?php

namespace Kevinpurwito\LaravelCountry;

use Illuminate\Support\ServiceProvider;
use Kevinpurwito\LaravelCountry\Contracts\CityContract;
use Kevinpurwito\LaravelCountry\Contracts\CountryContract;
use Kevinpurwito\LaravelCountry\Contracts\ProvinceContract;
use Kevinpurwito\LaravelCountry\Models\City;
use Kevinpurwito\LaravelCountry\Models\Country;
use Kevinpurwito\LaravelCountry\Models\Province;

class CountryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->offerPublishing();

        $this->registerModelBindings();
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/kp_country.php', 'kp_country');
    }

    protected function offerPublishing()
    {
        if (! function_exists('config_path')) {
            // function not available and 'publish' not relevant in Lumen
            return;
        }

        $this->publishes([
            __DIR__ . '/../config/kp_country.php' => config_path('kp_country.php'),
        ], 'lc-config');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_countries_table.php' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_countries_table.php'),
        ], ['lc-migrations', 'lc-countries']);

        $this->publishes([
            __DIR__ . '/../database/migrations/create_provinces_table.php' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_provinces_table.php'),
        ], ['lc-migrations', 'lc-provinces']);

        $this->publishes([
            __DIR__ . '/../database/migrations/create_cities_table.php' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_cities_table.php'),
        ], ['lc-migrations', 'lc-cities']);

        $this->publishes([
            __DIR__ . '/../database/seeders/CountrySeeder.php' => database_path('seeders/CountrySeeder.php'),
        ], 'lc-seeders');

        $this->publishes([
            __DIR__ . '/../database/seeders/IndonesiaSeeder.php' => database_path('seeders/IndonesiaSeeder.php'),
        ], 'lc-seeders');
    }

    protected function registerModelBindings()
    {
        $this->app->bind(CountryContract::class, Country::class);
        $this->app->bind(ProvinceContract::class, Province::class);
        $this->app->bind(CityContract::class, City::class);
    }
}
