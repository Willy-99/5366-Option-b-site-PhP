<?php

declare(strict_types=1);

$racine = dirname(__DIR__);
$dossiersDeClasses = [
    $racine . '/Model/',
    $racine . '/Manager/',
    $racine . '/Service/',
    $racine . '/src/Core/',
    $racine . '/src/Controller/',
];

spl_autoload_register(static function (string $nomDeClasse) use ($dossiersDeClasses): void {
    foreach ($dossiersDeClasses as $dossier) {
        $fichier = $dossier . $nomDeClasse . '.php';

        if (is_file($fichier)) {
            require_once $fichier;
            return;
        }
    }
});
