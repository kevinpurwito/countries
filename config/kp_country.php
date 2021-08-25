<?php

return [
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
