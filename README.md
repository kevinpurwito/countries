# About Laravel Country

[![Tests](https://github.com/kevinpurwito/laravel-country/actions/workflows/run-tests.yml/badge.svg?branch=main)](https://github.com/kevinpurwito/laravel-country/actions/workflows/run-tests.yml)
[![Code Style](https://github.com/kevinpurwito/laravel-country/actions/workflows/php-cs-fixer.yml/badge.svg?branch=main)](https://github.com/kevinpurwito/laravel-country/actions/workflows/php-cs-fixer.yml)
[![Psalm](https://github.com/kevinpurwito/laravel-country/actions/workflows/psalm.yml/badge.svg?branch=main)](https://github.com/kevinpurwito/laravel-country/actions/workflows/psalm.yml)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/kevinpurwito/laravel-country.svg?style=flat-square)](https://packagist.org/packages/kevinpurwito/laravel-country)
[![Total Downloads](https://img.shields.io/packagist/dt/kevinpurwito/laravel-country.svg?style=flat-square)](https://packagist.org/packages/kevinpurwito/laravel-country)

Laravel Country is a package containing country list migration, seeders and model for Laravel.

The list of countries is populated from [https://countrycode.org/](https://countrycode.org/)

## Installation

You can install the package via composer:

```bash
composer require kevinpurwito/laravel-country
```

## Configuration

The `vendor:publish` command will publish a file named `kp_country.php` within your laravel project config
folder `config/kp_country.php`. Edit this file with your desired table name for the table, defaults to `countries`.

Published Config File Contents

```php
[
    'table_names' => [
        'country' => env('KP_COUNTRY_TABLE_NAME', 'countries'),

        'province' => env('KP_COUNTRY_TABLE_NAME_PROVINCE', 'provinces'),

        'city' => env('KP_COUNTRY_TABLE_NAME_CITY', 'cities'),

        'district' => env('KP_COUNTRY_TABLE_NAME_DISTRICT', 'districts'),

        'ward' => env('KP_COUNTRY_TABLE_NAME_WARD', 'wards'),
    ],

    'popular_column' => env('KP_COUNTRY_POPULAR_COLUMN', true),

    'ordinal_column' => env('KP_COUNTRY_ORDINAL_COLUMN', true),
];
```

Alternatively you can ignore the above publish command and add this following variables to your `.env` file.

```text
KP_COUNTRY_TABLE_NAME=countries
KP_COUNTRY_TABLE_NAME_PROVINCE=provinces
KP_COUNTRY_TABLE_NAME_CITY=cities
KP_COUNTRY_TABLE_NAME_DISTRICT=districts
KP_COUNTRY_TABLE_NAME_WARD=wards
KP_COUNTRY_POPULAR_COLUMN=true
KP_COUNTRY_ORDINAL_COLUMN=true
```

## Auto Discovery

If you're using Laravel 5.5+ you don't need to manually add the service provider or facade. This will be
Auto-Discovered. For all versions of Laravel below 5.5, you must manually add the ServiceProvider & Facade to the
appropriate arrays within your Laravel project `config/app.php`

### Provider

```php
[
    Kevinpurwito\LaravelCountry\CountryServiceProvider::class,
];
```

## Running the migration

The only thing that you need to publish is the migration, you shouldn't need to publish the others, such as seeders and
config; unless you want to customize them

Countries only migration

```bash
php artisan vendor:publish --provider=Kevinpurwito\LaravelCountry\CountryServiceProvider --tag=lc-countries
```

All migrations (countries, provinces, cities, districts, wards)

```bash
php artisan vendor:publish --provider=Kevinpurwito\LaravelCountry\CountryServiceProvider --tag=lc-migrations
```

## Running the seeders

Countries seeder

```bash
php artisan db:seed --class=Kevinpurwito\LaravelCountry\Database\Seeders\CountriesSeeder
```

> countries `code` are from [ISO 3166](https://en.wikipedia.org/wiki/ISO_3166)

Indonesia's provinces, cities and districts seeder

```bash
php artisan db:seed --class=Kevinpurwito\LaravelCountry\Database\Seeders\IdProvincesSeeder
php artisan db:seed --class=Kevinpurwito\LaravelCountry\Database\Seeders\IdCitiesSeeder
php artisan db:seed --class=Kevinpurwito\LaravelCountry\Database\Seeders\IdDistrictsSeeder
```

> Indonesian provinces `iso2` are from [ISO 3166-2:ID](https://en.wikipedia.org/wiki/ISO_3166-2:ID)

> Indonesian provinces, cities and districts `code` are from [Kemendagri](https://id.wikipedia.org/wiki/Daftar_kecamatan_dan_kelurahan_di_Indonesia)

## Usage

Country class

```php
use Kevinpurwito\LaravelCountry\Models\Country;

// Get a country by name, iso2 or iso3
$country = Country::findByName('Indonesia');
$country = Country::findByIso2('ID');
$country = Country::findByIso3('IDN');

// mark a country as popular
$country->setPopular(true);

// set `ordinal` of the country
$country->setOrdinal(1);

// get list of countries by default ordering (`popular` first, after that by `orinal` and finally by `name`)
$countries = Country::default()->get();

// get list of provinces in a country
$provinces = $country->provinces()->default()->get();

// get list of cities in a province
$cities = $provinces[0]->cities()->default()->get();
```

### Adding relationship to your own model

```php
use Kevinpurwito\LaravelCountry\Relationships\BelongsToCountry;
use Illuminate\Database\Eloquent\Model;

class User extends Model 
{
    use BelongsToCountry;
    
    // now you can use `country` relationship to your user model, given that your table has 'country_id' column
    // e.g. $user->country->iso2; returns 'ID' if your user belongs to 'Indonesia' country
}

```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email [kevin.purwito@gmail.com](mailto:kevin.purwito@gmail.com)
instead of using the issue tracker.

## Credits

- [Kevin Purwito](https://github.com/kevinpurwito)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [PHP Package Boilerplate](https://laravelpackageboilerplate.com)
by [Beyond Code](http://beyondco.de/)
with some modifications inspired from [PHP Package Skeleton](https://github.com/spatie/package-skeleton-php)
by [spatie](https://spatie.be/).
