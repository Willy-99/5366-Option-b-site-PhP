<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Découvrez l’idée de partage de livres qui anime TomTroc.">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php require __DIR__ . '/partials/header.php'; ?>

    <main class="presentation-page">
        <section class="presentation-hero" aria-labelledby="presentation-title">
            <div class="section-wrap presentation-copy">
                <p class="eyebrow">Notre idée</p>
                <h1 id="presentation-title">Un livre lu est un livre à partager.</h1>
                <p>TomTroc met en relation des lecteurs passionnés pour donner une nouvelle vie aux livres et faire de belles découvertes.</p>
                <a class="button button-dark" href="index.php?page=livres">Découvrir les livres <span aria-hidden="true">→</span></a>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <a class="brand brand-footer" href="index.php"><span class="brand-mark" aria-hidden="true">t.</span><span>TomTroc</span></a>
        <p>Les belles histoires ne restent pas sur une étagère.</p>
        <a class="footer-about" href="index.php?page=notre-projet">Notre démarche</a>
        <span class="footer-credit">Fait pour les lecteurs <span aria-hidden="true">♡</span></span>
    </footer>
</body>
</html>
