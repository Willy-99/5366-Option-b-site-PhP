<?php

declare(strict_types=1);

final class BookRepository
{
    public function __construct(private PDO $connection)
    {
    }

    /**
     * @return Book[]
     */
    public function findAvailableBooks(string $searchTerm = ''): array
    {
        $sql = <<<'SQL'
            SELECT
                books.id,
                books.title,
                books.author,
                books.genre,
                books.image_path,
                books.cover_color,
                books.is_available,
                users.pseudo AS seller_pseudo
            FROM books
            INNER JOIN users ON users.id = books.owner_id
            WHERE books.is_available = 1
            SQL;

        if ($searchTerm === '') {
            $statement = $this->connection->query($sql . ' ORDER BY books.created_at DESC, books.id DESC');
        } else {
            $statement = $this->connection->prepare(
                $sql . ' AND books.title LIKE :title ORDER BY books.created_at DESC, books.id DESC'
            );
            $statement->execute(['title' => '%' . $searchTerm . '%']);
        }

        $rows = $statement->fetchAll();

        return array_map(
            static fn (array $row): Book => new Book(
                (int) $row['id'],
                $row['title'],
                $row['author'],
                $row['genre'],
                $row['image_path'],
                $row['cover_color'],
                $row['seller_pseudo'],
                (bool) $row['is_available']
            ),
            $rows
        );
    }
}
