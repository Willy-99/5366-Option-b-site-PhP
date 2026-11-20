<?php

declare(strict_types=1);

final class PresentationController
{
    public function index(): void
    {
        $pageTitle = 'Notre démarche - TomTroc';
        $currentPage = 'notre-projet';

        require __DIR__ . '/../../views/presentation.php';
    }
}
