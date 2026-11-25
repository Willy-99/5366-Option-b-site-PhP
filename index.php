<?php

declare(strict_types=1);

require_once __DIR__ . '/config/autoload.php';

$page = $_GET['page'] ?? 'accueil';
try {
    switch ($page) {
        case 'connexion':
        case 'compte':
        case 'messagerie':
            $authController = new AuthController();
            $authController->login();
            break;
        case 'inscription':
            $authController = new AuthController();
            $authController->register();
            break;
        case 'livres':
            $livreController = new LivreController();
            $livreController->showAllBook();
            break;
        case 'livre':
            $livreController = new LivreController();
            $livreController->showDetailBook();
            break;
        case 'modifier-livre':
            $livreController = new LivreController();
            $livreController->editBook();
            break;
        case 'notre-projet':
            $presentationController = new PresentationController();
            $presentationController->index();
            break;
        default:
            $livreController = new LivreController();
            $livreController->showLastBook();
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
