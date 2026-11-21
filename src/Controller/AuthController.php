<?php

declare(strict_types=1);

final class AuthController
{
    public function login(): void
    {
        $pageTitle = 'Connexion - TomTroc';
        $currentPage = 'connexion';
        $formNotice = $this->getFormNotice('connexion');

        $view = new View($pageTitle, $currentPage);
        $view->render('auth/login', ['formNotice' => $formNotice]);
    }

    public function register(): void
    {
        $pageTitle = 'Inscription - TomTroc';
        $currentPage = 'inscription';
        $formNotice = $this->getFormNotice('inscription');

        $view = new View($pageTitle, $currentPage);
        $view->render('auth/register', ['formNotice' => $formNotice]);
    }

    private function getFormNotice(string $formName): ?string
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            return null;
        }

        return 'Le formulaire de ' . $formName . ' sera activé lors de la prochaine étape.';
    }
}
