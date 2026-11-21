<?php

declare(strict_types=1);

final class PresentationController
{
    public function index(): void
    {
        $pageTitle = 'Notre démarche - TomTroc';
        $currentPage = 'notre-projet';

        $view = new View($pageTitle, $currentPage);
        $view->render('presentation');
    }
}
