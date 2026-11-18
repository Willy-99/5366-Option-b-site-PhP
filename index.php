<?php

declare(strict_types=1);

require_once __DIR__ . '/src/Controller/HomeController.php';
require_once __DIR__ . '/src/Controller/AuthController.php';

$page = $_GET['page'] ?? 'accueil';

switch ($page) {
    case 'connexion':
        (new AuthController())->login();
        break;
    case 'inscription':
        (new AuthController())->register();
        break;
    default:
        (new HomeController())->index();
}
