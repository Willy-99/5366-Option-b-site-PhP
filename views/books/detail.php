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

    <main class="section-wrap book-detail-page">
        <a class="text-link" href="index.php?page=livres">← Retour aux livres</a>

        <article class="book-detail">
            <div class="cover cover-<?= htmlspecialchars($livre->getCoverColor(), ENT_QUOTES, 'UTF-8') ?> book-detail-cover">
                <?php if ($livre->getImagePath() !== null): ?>
                    <img class="cover-image" src="<?= htmlspecialchars($livre->getImagePath(), ENT_QUOTES, 'UTF-8') ?>" alt="Couverture du livre <?= htmlspecialchars($livre->getTitle(), ENT_QUOTES, 'UTF-8') ?>">
                <?php else: ?>
                    <span class="cover-label"><?= htmlspecialchars($livre->getGenre(), ENT_QUOTES, 'UTF-8') ?></span>
                    <span class="cover-title"><?= htmlspecialchars($livre->getTitle(), ENT_QUOTES, 'UTF-8') ?></span>
                    <span class="cover-author"><?= htmlspecialchars($livre->getAuthor(), ENT_QUOTES, 'UTF-8') ?></span>
                <?php endif; ?>
            </div>

            <div class="book-detail-copy">
                <p class="eyebrow">Livre proposé à l’échange</p>
                <h1><?= htmlspecialchars($livre->getTitle(), ENT_QUOTES, 'UTF-8') ?></h1>
                <p class="book-detail-author">de <?= htmlspecialchars($livre->getAuthor(), ENT_QUOTES, 'UTF-8') ?></p>
                <dl>
                    <div><dt>Genre</dt><dd><?= htmlspecialchars($livre->getGenre(), ENT_QUOTES, 'UTF-8') ?></dd></div>
                    <div><dt>Proposé par</dt><dd><?= htmlspecialchars($livre->getSellerPseudo(), ENT_QUOTES, 'UTF-8') ?></dd></div>
                    <div><dt>Disponibilité</dt><dd><?= $livre->isAvailable() ? 'Disponible' : 'Déjà échangé' ?></dd></div>
                </dl>
                <a class="button button-green" href="index.php?page=modifier-livre&amp;id=<?= $livre->getId() ?>">Modifier ce livre</a>
            </div>
        </article>
    </main>

    <footer class="site-footer">
        <a class="brand brand-footer" href="index.php"><span class="brand-mark" aria-hidden="true">t.</span><span>TomTroc</span></a>
        <p>Les belles histoires ne restent pas sur une étagère.</p>
    </footer>
</body>
</html>
