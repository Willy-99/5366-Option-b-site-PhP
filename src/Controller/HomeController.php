<?php

declare(strict_types=1);

final class HomeController
{
    public function index(): void
    {
        $pageTitle = 'TomTroc - Les livres se partagent';

        require __DIR__ . '/../../views/home.php';
    }
}
