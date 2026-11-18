<?php

declare(strict_types=1);

require_once __DIR__ . '/src/Controller/HomeController.php';

$controller = new HomeController();
$controller->index();
