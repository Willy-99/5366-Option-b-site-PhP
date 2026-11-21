<?php

declare(strict_types=1);

final class LivreController
{
    public function __construct(private LivreManager $livreManager)
    {
    }

    public function catalogue(): void
    {
        $pageTitle = 'Nos livres - TomTroc';
        $currentPage = 'livres';
        $searchTerm = isset($_GET['q']) && is_string($_GET['q'])
            ? trim($_GET['q'])
            : '';
        $livres = $this->livreManager->getAllLivres($searchTerm);

        $view = new View($pageTitle, $currentPage);
        $view->render('books/index', [
            'livres' => $livres,
            'searchTerm' => $searchTerm,
        ]);
    }

}
