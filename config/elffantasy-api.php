<?php

return [
    'credentials' => [
        'username'      => env('DATA_API_EMAIL'),
        'password'      => env('DATA_API_PASSWORD'),
        'client_id'     => env('DATA_API_CLIENT_ID'),
        'client_secret' => env('DATA_API_CLIENT_SECRET'),
    ],
    'url'         => env('DATA_API_URL', 'https://api.elf-data.eu'),
];
