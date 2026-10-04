<?php
declare(strict_types=1);

return [
    'app' => [
        'name' => 'Kadad Auth',
        'issuer' => 'https://auth.kadad.ir',
        'environment' => 'development',
    ],
    'database' => [
        'dsn' => getenv('DB_DSN') ?: 'mysql:host=127.0.0.1;dbname=kadad_auth;charset=utf8mb4',
        'username' => getenv('DB_USERNAME') ?: 'root',
        'password' => getenv('DB_PASSWORD') ?: '',
    ],
];
