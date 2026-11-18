<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Connectez-vous à votre compte TomTroc.">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="auth-page">
    <header class="site-header auth-header">
        <a class="brand" href="index.php" aria-label="TomTroc, accueil">
            <span class="brand-mark" aria-hidden="true">t.</span>
            <span>TomTroc</span>
        </a>
        <a class="header-link" href="index.php">Retour à l’accueil <span aria-hidden="true">↗</span></a>
    </header>

    <main class="auth-main">
        <section class="auth-card" aria-labelledby="auth-title">
            <div class="auth-aside" aria-hidden="true">
                <p class="eyebrow">Ravi de vous retrouver</p>
                <p class="auth-quote">Les histoires<br>se partagent<br><em>mieux à plusieurs.</em></p>
                <span class="auth-aside-note">TomTroc · La bibliothèque qui circule</span>
            </div>

            <div class="auth-form-wrap">
                <p class="eyebrow">Votre espace lecteur</p>
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

                    <button class="button button-dark auth-submit" type="submit">Se connecter <span aria-hidden="true">→</span></button>
                </form>

                <p class="auth-switch">Pas encore de compte ? <a href="index.php?page=inscription">Créer un compte</a></p>
            </div>
        </section>
    </main>

    <footer class="auth-footer"><a href="index.php">TomTroc</a><span>Les belles histoires se partagent.</span></footer>
</body>
</html>
