<?php

declare(strict_types=1);

final class DBManager
{
    private static ?self $instance = null;
    private PDO $db;

    private function __construct()
    {
        $config = require dirname(__DIR__, 2) . '/config/database.php';
        $dsn = sprintf(
            'mysql:host=%s;dbname=%s;charset=utf8mb4',
            $config['host'],
            $config['name']
        );

        try {
            $this->db = new PDO($dsn, $config['user'], $config['password'], [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ]);
        } catch (PDOException $exception) {
            throw new RuntimeException(
                'Connexion à la base TomTroc impossible. Vérifiez que MySQL est démarré et que database/schema.sql a été importé.',
                0,
                $exception
            );
        }
    }

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getPDO(): PDO
    {
        return $this->db;
    }

    public function query(string $sql, ?array $params = null): PDOStatement
    {
        if ($params === null) {
            $statement = $this->db->query($sql);
        } else {
            $statement = $this->db->prepare($sql);
            $statement->execute($params);
        }

        if (!($statement instanceof PDOStatement)) {
            throw new RuntimeException('La requête SQL n’a pas pu être exécutée.');
        }

        return $statement;
    }
}
