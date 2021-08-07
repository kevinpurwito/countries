<?php

namespace Kevinpurwito\LaravelCountry;

use Illuminate\Support\ServiceProvider;
use Kevinpurwito\LaravelCountry\Models\Country;

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
        ], 'laravel-country-config');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_countries_table.php' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_countries_table.php'),
        ], 'laravel-country');

        $this->publishes([
            __DIR__ . '/../database/seeders/CountrySeeder.php' => database_path('seeders/CountrySeeder.php'),
        ], 'laravel-country');

        $this->publishes([
            __DIR__ . '/Models/Country.php' => app_path('Models/Country.php'),
        ], 'laravel-country-models');
    }

    protected function registerModelBindings()
    {
        $config = $this->app->config['kp_country . models'];

        if (! $config) {
            return;
        }

        $this->app->bind(Country::class, $config['country']);
    }
}
