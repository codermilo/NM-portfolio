<?php

require_once __DIR__ . '/../vendor/autoload.php';

// Load .env file from the project root
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

return [
    'database' => [
        'host' => '127.0.0.1',
        'port' => 3306,
        'dbname' => 'nmhomepage',
        'charset' => 'utf8mb4'
    ],

    'services' => [
        'prerender' => [
            'token' => '',
            'secret' => ''
        ]
    ]
];
