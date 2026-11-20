<?php

declare(strict_types=1);

final class BookController
{
    public function __construct(private BookRepository $bookRepository)
    {
    }

    public function catalogue(): void
    {
        $pageTitle = 'Nos livres - TomTroc';
        $currentPage = 'livres';
        $searchTerm = trim((string) ($_GET['q'] ?? ''));
        $books = $this->bookRepository->findAvailableBooks($searchTerm);

        require __DIR__ . '/../../views/books/index.php';
    }
}
