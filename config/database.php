<?php

declare(strict_types=1);

return [
    // Valeurs par défaut pour une installation locale XAMPP. Elles peuvent
    // être remplacées par les variables d'environnement DB_HOST, DB_NAME,
    // DB_USER et DB_PASSWORD.
    'host' => getenv('DB_HOST') ?: '127.0.0.1',
    'name' => getenv('DB_NAME') ?: 'tomtroc',
    'user' => getenv('DB_USER') ?: 'root',
    'password' => getenv('DB_PASSWORD') ?: 'a(Na_Fj}b9lk_})i)eti',
];
