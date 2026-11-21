<?php

declare(strict_types=1);

final class HomeController
{
    public function __construct(private LivreManager $livreManager)
    {
    }

    public function index(): void
    {
        $pageTitle = 'TomTroc - Les livres se partagent';
        $currentPage = 'accueil';
        $livres = $this->livreManager->getAllLivres();

        $view = new View($pageTitle, $currentPage);
        $view->render('home', ['livres' => $livres]);
    }
}
