<?php

declare(strict_types=1);

final class LivreController
{
    /** Affiche les quatre derniers livres sur la page d'accueil. */
    public function showLastBook(): void
    {
        $livreManager = new LivreManager();
        $livres = $livreManager->getLastLivres();

        $view = new View('TomTroc - Les livres se partagent', 'accueil');
        $view->render('home', ['livres' => $livres]);
    }

    /** Affiche tous les livres disponibles, avec une recherche facultative. */
    public function showAllBook(): void
    {
        $livreManager = new LivreManager();
        $searchTerm = isset($_GET['q']) && is_string($_GET['q'])
            ? trim($_GET['q'])
            : '';
        $livres = $livreManager->getAllLivres($searchTerm);

        $view = new View('Nos livres - TomTroc', 'livres');
        $view->render('books/index', [
            'livres' => $livres,
            'searchTerm' => $searchTerm,
        ]);
    }

    /** Affiche le détail du livre demandé par son identifiant. */
    public function showDetailBook(): void
    {
        $livre = $this->getRequestedBook();

        if ($livre === null) {
            $this->showBookNotFound();
            return;
        }

        $view = new View($livre->getTitle() . ' - TomTroc', 'livres');
        $view->render('books/detail', ['livre' => $livre]);
    }

    /** Affiche le formulaire de modification d'un livre existant. */
    public function editBook(): void
    {
        $livre = $this->getRequestedBook();

        if ($livre === null) {
            $this->showBookNotFound();
            return;
        }

        $view = new View('Modifier un livre - TomTroc', 'livres');
        $view->render('books/edit', ['livre' => $livre]);
    }

    private function getRequestedBook(): ?Livre
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        if (!is_int($id) || $id < 1) {
            return null;
        }

        $livreManager = new LivreManager();

        return $livreManager->getLivreById($id);
    }

    private function showBookNotFound(): void
    {
        http_response_code(404);
        (new View('Livre introuvable - TomTroc', 'livres'))->render('errors/not-found');
    }
}
