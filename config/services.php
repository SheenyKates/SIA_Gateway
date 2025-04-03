<?php

return [
    'users1' => [
        'base_uri' => env('USERS1_SERVICE_BASE_URL', 'http://localhost:8000'),
        'endpoint' => env('USERS1_SERVICE_USERS_ENDPOINT', '/api/users1'),
    ],
    
    'users2' => [
        'base_uri' => env('USERS2_SERVICE_BASE_URL', 'http://localhost:8001'),
        'endpoint' => env('USERS2_SERVICE_USERS_ENDPOINT', '/api/users2'), 
    ],
];
