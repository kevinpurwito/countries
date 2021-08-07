<?php

return [
    'models' => [
        'country' => Kevinpurwito\LaravelCountry\Models\Country::class,
    ],

    'table_name' => env('KP_COUNTRY_TABLE_NAME', 'countries'),

    'popular_column' => env('KP_COUNTRY_POPULAR_COLUMN', true),

    'order_no_column' => env('KP_COUNTRY_ORDER_NO_COLUMN', true),
];