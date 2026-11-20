<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Créez votre compte TomTroc pour partager vos livres.">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="auth-page">
    <?php require __DIR__ . '/../partials/header.php'; ?>

    <main class="auth-main">
        <section class="auth-card auth-card-register" aria-labelledby="auth-title">
            <div class="auth-form-wrap">
                <p class="eyebrow">Bienvenue chez TomTroc</p>
                <h1 id="auth-title">Créer un compte</h1>
                <p class="auth-intro">Quelques informations suffisent pour commencer.</p>

                <?php if ($formNotice !== null): ?>
                    <p class="form-notice" role="status"><?= htmlspecialchars($formNotice, ENT_QUOTES, 'UTF-8') ?></p>
                <?php endif; ?>

                <form class="auth-form" action="index.php?page=inscription" method="post">
                    <label for="username">Pseudo</label>
                    <input id="username" name="username" type="text" autocomplete="username" placeholder="Votre pseudo" required>

                    <label for="email">Adresse e-mail</label>
                    <input id="email" name="email" type="email" autocomplete="email" placeholder="vous@exemple.fr" required>

                    <label for="password">Mot de passe</label>
                    <input id="password" name="password" type="password" autocomplete="new-password" placeholder="8 caractères minimum" minlength="8" required>

                    <button class="button button-green auth-submit" type="submit">Créer mon compte <span aria-hidden="true">→</span></button>
                </form>

                <p class="auth-quote-below">Les histoires se partagent mieux à plusieurs.</p>
                <p class="auth-switch">Déjà membre ? <a href="index.php?page=connexion">Se connecter</a></p>
            </div>

            <div class="auth-photo">
                <img src="public/images/bibliotheque-inscription.jpg" alt="Intérieur lumineux d’une bibliothèque avec des étagères et des fauteuils">
                <a class="image-credit" href="https://unsplash.com/photos/a-library-interior-with-bookshelves-and-chairs-tR5lEkWTkg8" target="_blank" rel="noopener noreferrer">Photo : Brooke Balentine / Unsplash</a>
            </div>
        </section>
    </main>

    <footer class="auth-footer"><a href="index.php">TomTroc</a><span>Les belles histoires se partagent.</span></footer>
</body>
</html>
