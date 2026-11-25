<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require __DIR__ . '/../partials/header.php'; ?>

    <main class="section-wrap not-found-page">
        <p class="eyebrow">Erreur 404</p>
        <h1>Ce livre est introuvable.</h1>
        <p>Il a peut-être déjà trouvé un nouveau lecteur.</p>
        <a class="button button-green" href="index.php?page=livres">Voir tous les livres</a>
    </main>

    <footer class="site-footer">
        <a class="brand brand-footer" href="index.php"><span class="brand-mark" aria-hidden="true">t.</span><span>TomTroc</span></a>
        <p>Les belles histoires ne restent pas sur une étagère.</p>
    </footer>
</body>
</html>
