<?php

declare(strict_types=1);

require_once __DIR__ . '/src/Model/Book.php';
require_once __DIR__ . '/src/Core/Database.php';
require_once __DIR__ . '/src/Repository/BookRepository.php';
require_once __DIR__ . '/src/Controller/HomeController.php';
require_once __DIR__ . '/src/Controller/BookController.php';
require_once __DIR__ . '/src/Controller/AuthController.php';
require_once __DIR__ . '/src/Controller/PresentationController.php';

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
            $bookRepository = new BookRepository(Database::getConnection());
            (new BookController($bookRepository))->catalogue();
            break;
        case 'notre-projet':
            (new PresentationController())->index();
            break;
        default:
            $bookRepository = new BookRepository(Database::getConnection());
            (new HomeController($bookRepository))->index();
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
    require __DIR__ . '/views/errors/database.php';
}
