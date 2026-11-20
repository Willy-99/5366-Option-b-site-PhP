<?php

declare(strict_types=1);

final class BookRepository
{
    /**
     * @return Book[]
     */
    public function findAvailableBooks(string $searchTerm = ''): array
    {
        $books = [
            new Book('Les heures tranquilles', 'Élise Moreau', 'Roman', 'sage'),
            new Book("Là où l'on revient", 'Noé Bernard', 'Récit', 'terracotta'),
            new Book('La couleur du silence', 'Mila Perrin', 'Littérature', 'blue'),
            new Book('Un été à soi', 'Louis Arnaud', 'Roman', 'yellow'),
        ];

        if ($searchTerm === '') {
            return $books;
        }

        return array_values(array_filter(
            $books,
            static fn (Book $book): bool => stripos($book->getTitle(), $searchTerm) !== false
        ));
    }
}
