<?php

declare(strict_types=1);

final class View
{
    private string $viewsDirectory;

    public function __construct(
        private string $title,
        private string $currentPage = ''
    ) {
        $this->viewsDirectory = dirname(__DIR__, 2) . '/views';
    }

    /**
     * Charge un template PHP et lui transmet ses données.
     * Le nom du template est relatif au dossier views, par exemple "home"
     * ou "books/index".
     */
    public function render(string $template, array $data = []): void
    {
        if (!preg_match('~^[a-zA-Z0-9_-]+(?:/[a-zA-Z0-9_-]+)*$~', $template)) {
            throw new LogicException('Nom de template invalide : ' . $template);
        }

        $templatePath = $this->viewsDirectory . '/' . $template . '.php';

        if (!is_file($templatePath)) {
            throw new LogicException('Template introuvable : ' . $templatePath);
        }

        $pageTitle = $this->title;
        $currentPage = $this->currentPage;
        extract($data, EXTR_SKIP);

        require $templatePath;
    }
}
