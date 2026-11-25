<?php

declare(strict_types=1);

final class LivreManager extends AbstractEntityManager
{
    /**
     * Récupère les quatre livres ajoutés le plus récemment.
     *
     * @return Livre[]
     */
    public function getLastLivres(): array
    {
        $sql = <<<'SQL'
            SELECT
                books.id,
                books.owner_id,
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
            ORDER BY books.created_at DESC, books.id DESC
            LIMIT 4
            SQL;

        $statement = $this->db->query($sql);
        $livres = [];

        while ($data = $statement->fetch()) {
            $livres[] = new Livre($data);
        }

        return $livres;
    }

    /**
     * @return Livre[]
     */
    public function getAllLivres(string $searchTerm = ''): array
    {
        $sql = <<<'SQL'
            SELECT
                books.id,
                books.owner_id,
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
        $parameters = [];

        if ($searchTerm !== '') {
            $sql .= ' AND books.title LIKE :title';
            $parameters['title'] = '%' . $searchTerm . '%';
        }

        $sql .= ' ORDER BY books.created_at DESC, books.id DESC';

        $statement = $this->db->query($sql, $parameters);
        $livres = [];

        while ($data = $statement->fetch()) {
            $livres[] = new Livre($data);
        }

        return $livres;
    }

    public function getLivreById(int $id): ?Livre
    {
        $sql = <<<'SQL'
            SELECT
                books.id,
                books.owner_id,
                books.title,
                books.author,
                books.genre,
                books.image_path,
                books.cover_color,
                books.is_available,
                users.pseudo AS seller_pseudo
            FROM books
            INNER JOIN users ON users.id = books.owner_id
            WHERE books.id = :id
            LIMIT 1
            SQL;

        $statement = $this->db->query($sql, ['id' => $id]);
        $data = $statement->fetch();

        return $data === false ? null : new Livre($data);
    }
}
