<?php

return [
    'table_names' => [
        'country' => env('KP_COUNTRY_TABLE_NAME', 'countries'),

        'province' => env('KP_COUNTRY_TABLE_NAME_PROVINCE', 'provinces'),

        'city' => env('KP_COUNTRY_TABLE_NAME_CITY', 'cities'),
    ],

    'popular_column' => env('KP_COUNTRY_POPULAR_COLUMN', true),

    'order_no_column' => env('KP_COUNTRY_ORDER_NO_COLUMN', true),
];
