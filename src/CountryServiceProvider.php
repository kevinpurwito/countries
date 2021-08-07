<?php

namespace Kevinpurwito\LaravelCountry;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Collection;
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
        ], 'config');

        $this->publishes([
            __DIR__ . '/../database/migrations/create_countries_tables.php' => $this->getMigrationFileName('create_countries_tables.php'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../database/seeders/CountrySeeder.php' => database_path('seeders/CountrySeeder.php'),
        ], 'seeders');

        $this->publishes([
            __DIR__ . '/Models/Country.php' => app_path('Models/Country.php'),
        ], 'models');
    }

    protected function registerModelBindings()
    {
        $config = $this->app->config['kp_country . models'];

        if (! $config) {
            return;
        }

        $this->app->bind(Country::class, $config['country']);
    }

    /**
     * Returns existing migration file if found, else uses the current timestamp.
     *
     * @param string $migrationFileName
     * @return string
     */
    protected function getMigrationFileName(string $migrationFileName): string
    {
        $timestamp = date('Y_m_d_His');

        $filesystem = $this->app->make(Filesystem::class);

        return Collection::make(
            $this->app->databasePath() . DIRECTORY_SEPARATOR . 'migrations' . DIRECTORY_SEPARATOR
        )->flatMap(function ($path) use ($filesystem, $migrationFileName) {
            return $filesystem->glob($path . ' * _' . $migrationFileName);
        })->push($this->app->databasePath() . "/migrations/{$timestamp}_{$migrationFileName}")->first();
    }
}
