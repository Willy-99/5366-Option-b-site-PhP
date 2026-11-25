<!doctype html>
<html lang="fr">
<?php
$pageDescription = 'Parcourez les livres proposés à l’échange par les lecteurs TomTroc.';
require __DIR__ . '/../partials/head.php';
?>
<body>
    <?php require __DIR__ . '/../partials/header.php'; ?>

    <main class="catalogue-page">
        <section class="catalogue-intro" aria-labelledby="catalogue-title">
            <p class="eyebrow">La bibliothèque TomTroc</p>
            <h1 id="catalogue-title">Nos livres à l’échange</h1>
            <p>Parcourez les livres disponibles et trouvez votre prochaine lecture.</p>

            <form class="book-search" action="index.php" method="get" role="search">
                <input type="hidden" name="page" value="livres">
                <label class="visually-hidden" for="book-search">Rechercher un livre par son titre</label>
                <input id="book-search" type="search" name="q" value="<?= htmlspecialchars($searchTerm, ENT_QUOTES, 'UTF-8') ?>" placeholder="Rechercher un titre">
                <button class="button button-green" type="submit">Rechercher <span aria-hidden="true">→</span></button>
            </form>
        </section>

        <section class="catalogue section-wrap catalogue-results" aria-label="Résultats du catalogue">
            <div class="section-heading">
                <div>
                    <p class="eyebrow"><?= count($livres) ?> livre<?= count($livres) > 1 ? 's' : '' ?> disponible<?= count($livres) > 1 ? 's' : '' ?></p>
                    <h2><?= $searchTerm === '' ? 'À découvrir' : 'Résultats de recherche' ?></h2>
                </div>
                <?php if ($searchTerm !== ''): ?>
                    <a class="text-link" href="index.php?page=livres">Effacer la recherche <span aria-hidden="true">×</span></a>
                <?php endif; ?>
            </div>

            <?php if ($livres === []): ?>
                <p class="empty-results">Aucun livre ne correspond à « <?= htmlspecialchars($searchTerm, ENT_QUOTES, 'UTF-8') ?> ».</p>
            <?php else: ?>
                <div class="book-grid">
                    <?php foreach ($livres as $livre): ?>
                        <article class="book-card">
                            <div class="cover cover-<?= htmlspecialchars($livre->getCoverColor(), ENT_QUOTES, 'UTF-8') ?>">
                                <?php if ($livre->getImagePath() !== null): ?>
                                    <img class="cover-image" src="<?= htmlspecialchars($livre->getImagePath(), ENT_QUOTES, 'UTF-8') ?>" alt="Couverture du livre <?= htmlspecialchars($livre->getTitle(), ENT_QUOTES, 'UTF-8') ?>" loading="lazy">
                                <?php else: ?>
                                    <span class="cover-label"><?= htmlspecialchars($livre->getGenre(), ENT_QUOTES, 'UTF-8') ?></span>
                                    <span class="cover-title"><?= htmlspecialchars($livre->getTitle(), ENT_QUOTES, 'UTF-8') ?></span>
                                    <span class="cover-author"><?= htmlspecialchars($livre->getAuthor(), ENT_QUOTES, 'UTF-8') ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="book-info">
                                <div>
                                    <h3><a href="index.php?page=livre&amp;id=<?= $livre->getId() ?>"><?= htmlspecialchars($livre->getTitle(), ENT_QUOTES, 'UTF-8') ?></a></h3>
                                    <p><?= htmlspecialchars($livre->getAuthor(), ENT_QUOTES, 'UTF-8') ?></p>
                                    <p class="book-seller">Proposé par <?= htmlspecialchars($livre->getSellerPseudo(), ENT_QUOTES, 'UTF-8') ?></p>
                                </div>
                                <span class="available">Disponible</span>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </section>
    </main>

    <footer class="site-footer">
        <a class="brand brand-footer" href="index.php"><span class="brand-mark" aria-hidden="true">t.</span><span>TomTroc</span></a>
        <p>Les belles histoires ne restent pas sur une étagère.</p>
        <span class="footer-credit">Fait pour les lecteurs <span aria-hidden="true">♡</span></span>
    </footer>
</body>
</html>
