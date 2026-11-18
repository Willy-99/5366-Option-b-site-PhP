<?php

declare(strict_types=1);

final class AuthController
{
    public function login(): void
    {
        $pageTitle = 'Connexion - TomTroc';
        $formNotice = $this->getFormNotice('connexion');

        require __DIR__ . '/../../views/auth/login.php';
    }

    public function register(): void
    {
        $pageTitle = 'Inscription - TomTroc';
        $formNotice = $this->getFormNotice('inscription');

        require __DIR__ . '/../../views/auth/register.php';
    }

    private function getFormNotice(string $formName): ?string
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            return null;
        }

        return 'Le formulaire de ' . $formName . ' sera activé lors de la prochaine étape.';
    }
}
