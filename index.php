<?php

declare(strict_types=1);

require_once __DIR__ . '/config/autoload.php';

$page = $_GET['page'] ?? 'accueil';
try {
    switch ($page) {
        case 'connexion':
        case 'compte':
        case 'messagerie':
            (new AuthController())->login();
            break;
        case 'inscription':
            (new AuthController())->register();
            break;
        case 'livres':
            $livreManager = new LivreManager();
            (new LivreController($livreManager))->catalogue();
            break;
        case 'notre-projet':
            (new PresentationController())->index();
            break;
        default:
            $livreManager = new LivreManager();
            (new HomeController($livreManager))->index();
    }
} catch (PDOException | RuntimeException $exception) {
    $previousException = $exception->getPrevious();
    $logMessage = $exception->getMessage();

    if ($previousException instanceof Throwable) {
        $logMessage .= ' Cause : ' . $previousException->getMessage();
    }

    // Envoie l'erreur au journal du serveur PHP (visible dans le terminal
    // avec `php -S`), même si php.ini définit un fichier error_log séparé.
    error_log($logMessage, 4);
    http_response_code(503);
    (new View('Base de données indisponible - TomTroc'))->render('errors/database');
}
