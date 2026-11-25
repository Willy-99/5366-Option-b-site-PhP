<?php

declare(strict_types=1);

$localConfigurationFile = __DIR__ . '/database.local.php';
$localConfiguration = is_file($localConfigurationFile)
    ? require $localConfigurationFile
    : [];

$getConfigurationValue = static function (string $environmentVariable, string $key, string $default) use ($localConfiguration): string {
    $environmentValue = getenv($environmentVariable);

    if ($environmentValue !== false) {
        return $environmentValue;
    }

    return isset($localConfiguration[$key])
        ? (string) $localConfiguration[$key]
        : $default;
};

return [
    'host' => $getConfigurationValue('DB_HOST', 'host', '127.0.0.1'),
    'name' => $getConfigurationValue('DB_NAME', 'name', 'tomtroc'),
    'user' => $getConfigurationValue('DB_USER', 'user', 'root'),
    'password' => $getConfigurationValue('DB_PASSWORD', 'password', ''),
];
