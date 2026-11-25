<!doctype html>
<html lang="fr">
<?php
$pageDescription = 'Le livre demandé est introuvable sur TomTroc.';
require __DIR__ . '/../partials/head.php';
?>
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
