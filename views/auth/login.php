<!doctype html>
<html lang="fr">
<?php
$pageDescription = 'Connectez-vous à votre compte TomTroc.';
require __DIR__ . '/../partials/head.php';
?>
<body class="auth-page">
    <?php require __DIR__ . '/../partials/header.php'; ?>

    <main class="auth-main">
        <section class="auth-card auth-card-login" aria-labelledby="auth-title">
            <div class="auth-form-wrap">
                <p class="eyebrow">Ravi de vous retrouver</p>
                <h1 id="auth-title">Connexion</h1>
                <p class="auth-intro">Retrouvez votre bibliothèque et vos conversations.</p>

                <?php if ($formNotice !== null): ?>
                    <p class="form-notice" role="status"><?= htmlspecialchars($formNotice, ENT_QUOTES, 'UTF-8') ?></p>
                <?php endif; ?>

                <form class="auth-form" action="index.php?page=connexion" method="post">
                    <label for="email">Adresse e-mail</label>
                    <input id="email" name="email" type="email" autocomplete="email" placeholder="vous@exemple.fr" required>

                    <label for="password">Mot de passe</label>
                    <input id="password" name="password" type="password" autocomplete="current-password" placeholder="Votre mot de passe" required>

                    <button class="button button-green auth-submit" type="submit">Se connecter <span aria-hidden="true">→</span></button>
                </form>

                <p class="auth-quote-below">Les histoires se partagent mieux à plusieurs.</p>
                <p class="auth-switch">Pas encore de compte ? <a href="index.php?page=inscription">Créer un compte</a></p>
            </div>

            <div class="auth-photo">
                <img src="public/images/bibliotheque.jpg.webp" alt="Une bibliothèque remplie de livres à partager">
            </div>
        </section>
    </main>

    <footer class="auth-footer"><a href="index.php">TomTroc</a><span>Les belles histoires se partagent.</span></footer>
</body>
</html>
