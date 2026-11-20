<?php

declare(strict_types=1);

require_once __DIR__ . '/src/Model/Book.php';
require_once __DIR__ . '/src/Repository/BookRepository.php';
require_once __DIR__ . '/src/Controller/HomeController.php';
require_once __DIR__ . '/src/Controller/BookController.php';
require_once __DIR__ . '/src/Controller/AuthController.php';
require_once __DIR__ . '/src/Controller/PresentationController.php';

$page = $_GET['page'] ?? 'accueil';
$bookRepository = new BookRepository();

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
        (new BookController($bookRepository))->catalogue();
        break;
    case 'notre-projet':
        (new PresentationController())->index();
        break;
    default:
        (new HomeController($bookRepository))->index();
}
