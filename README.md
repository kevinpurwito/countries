# About Laravel Country

[![Tests](https://github.com/kevinpurwito/countries/actions/workflows/run-tests.yml/badge.svg?branch=main)](https://github.com/kevinpurwito/countries/actions/workflows/run-tests.yml)
[![Code Style](https://github.com/kevinpurwito/countries/actions/workflows/php-cs-fixer.yml/badge.svg?branch=main)](https://github.com/kevinpurwito/countries/actions/workflows/php-cs-fixer.yml)
[![Psalm](https://github.com/kevinpurwito/countries/actions/workflows/psalm.yml/badge.svg?branch=main)](https://github.com/kevinpurwito/countries/actions/workflows/psalm.yml)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/kevinpurwito/countries.svg?style=flat-square)](https://packagist.org/packages/kevinpurwito/countries)
[![Total Downloads](https://img.shields.io/packagist/dt/kevinpurwito/countries.svg?style=flat-square)](https://packagist.org/packages/kevinpurwito/countries)

Laravel Country is a package containing country list migration, seed and models for Laravel

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
    'models' => [
        'country' => Kevinpurwito\LaravelCountry\Models\Country::class,
    ],
    
    'table_name' => env('KP_COUNTRY_TABLE_NAME', 'countries'),
    
    'popular_column' => env('KP_COUNTRY_POPULAR_COLUMN', true),
    
    'order_no_column' => env('KP_COUNTRY_ORDER_NO_COLUMN', true),
];
```

Alternatively you can ignore the above publish command and add this following variables to your `.env` file.

```text
KP_COUNTRY_TABLE_NAME=countries
KP_COUNTRY_POPULAR_COLUMN=true
KP_COUNTRY_ORDER_NO_COLUMN=true
```

## Auto Discovery

If you're using Laravel 5.5+ you don't need to manually add the service provider or facade. This will be
Auto-Discovered. For all versions of Laravel below 5.5, you must manually add the ServiceProvider & Facade to the
appropriate arrays within your Laravel project `config/app.php`

#### Provider

```php
Kevinpurwito\LaravelCountry\CountryServiceProvider::class,
```

## Usage

```bash
php artisan migrate
php artisan seed --class=CountrySeeder
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
