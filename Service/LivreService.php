<?php

declare(strict_types=1);

final class LivreService
{
    /**
     * Recherche un livre à partir d'un identifiant reçu dans une requête.
     * Retourne null si l'identifiant est invalide ou si le livre n'existe pas.
     */
    public function getLivreById(mixed $identifiant): ?Livre
    {
        if (!is_int($identifiant) && !is_string($identifiant)) {
            return null;
        }

        $id = filter_var($identifiant, FILTER_VALIDATE_INT);

        if ($id === false || $id < 1) {
            return null;
        }

        $livreManager = new LivreManager();

        return $livreManager->getLivreById($id);
    }
}
