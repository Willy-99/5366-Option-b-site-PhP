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
        $searchTerm = isset($_GET['q']) && is_string($_GET['q'])
            ? trim($_GET['q'])
            : '';
        $books = $this->bookRepository->findAvailableBooks($searchTerm);

        require __DIR__ . '/../../views/books/index.php';
    }
}
