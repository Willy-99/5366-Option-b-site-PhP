<?php

declare(strict_types=1);

final class HomeController
{
    public function __construct(private BookRepository $bookRepository)
    {
    }

    public function index(): void
    {
        $pageTitle = 'TomTroc - Les livres se partagent';
        $currentPage = 'accueil';
        $books = $this->bookRepository->findAvailableBooks();

        require __DIR__ . '/../../views/home.php';
    }
}
