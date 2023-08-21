<?php

return[
    'database' => [
        'name' => 'todos',
        'username' => 'root',
        'password' => '',
        'connection' => 'mysql:host=localhost',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ]
    ]
];

