<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="TomTroc met en relation les lecteurs pour partager et échanger leurs livres.">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php require __DIR__ . '/partials/header.php'; ?>

    <main>
        <section class="hero" aria-labelledby="hero-title">
            <div class="hero-copy">
                <p class="eyebrow"><span class="eyebrow-dot" aria-hidden="true"></span> La bibliothèque qui circule</p>
                <h1 id="hero-title">Rejoignez nos lecteurs passionnés</h1>
                <p class="hero-intro">Donnez une nouvelle vie à vos livres en les échangeant avec d'autres amoureux de la lecture. Nous croyons en la magie du partage de connaissances et d'histoires à travers les livres.</p>
                <a class="button button-dark" href="index.php?page=livres">Découvrir <span aria-hidden="true">→</span></a>
                <p class="hero-note">Des histoires à lire. Des lecteurs à rencontrer.</p>
            </div>

            <div class="hero-art hero-photo">
                <img src="public/images/etal-livres-occasion.jpg" alt="Étal de livres d’occasion proposés à la vente, prêts à trouver de nouveaux lecteurs">
                <a class="image-credit" href="https://unsplash.com/photos/second-hand-books-for-sale-on-a-wooden-market-stall-IXB4T7_5eEw" target="_blank" rel="noopener noreferrer">Photo : Dhiemas Afif Febriyan / Unsplash</a>
            </div>
        </section>

        <section class="catalogue section-wrap" id="catalogue" aria-labelledby="catalogue-title">
            <div class="section-heading">
                <div>
                    <p class="eyebrow">À découvrir en ce moment</p>
                    <h2 id="catalogue-title">Des livres, des histoires.</h2>
                </div>
                <a class="text-link" href="index.php?page=livres">Tous les livres <span aria-hidden="true">→</span></a>
            </div>

            <div class="book-grid">
                <?php foreach ($books as $book): ?>
                    <article class="book-card">
                        <div class="cover cover-<?= htmlspecialchars($book->getCoverColor(), ENT_QUOTES, 'UTF-8') ?>">
                            <span class="cover-label"><?= htmlspecialchars($book->getGenre(), ENT_QUOTES, 'UTF-8') ?></span>
                            <span class="cover-title"><?= htmlspecialchars($book->getTitle(), ENT_QUOTES, 'UTF-8') ?></span>
                            <span class="cover-author"><?= htmlspecialchars($book->getAuthor(), ENT_QUOTES, 'UTF-8') ?></span>
                        </div>
                        <div class="book-info">
                            <div>
                                <h3><?= htmlspecialchars($book->getTitle(), ENT_QUOTES, 'UTF-8') ?></h3>
                                <p><?= htmlspecialchars($book->getAuthor(), ENT_QUOTES, 'UTF-8') ?></p>
                            </div>
                            <span class="available">Disponible</span>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
            <p class="catalogue-footnote">Aperçu de livres proposés par la communauté.</p>
        </section>

        <section class="how-it-works" id="fonctionnement" aria-labelledby="how-title">
            <div class="section-wrap how-inner">
                <div class="how-heading">
                    <p class="eyebrow">Simple comme bonjour</p>
                    <h2 id="how-title">Un livre change de mains.<br><em>Une histoire continue.</em></h2>
                </div>
                <ol class="steps">
                    <li><span class="step-number">01</span><div><h3>Présentez vos livres</h3><p>Créez votre bibliothèque et indiquez les livres que vous souhaitez partager.</p></div></li>
                    <li><span class="step-number">02</span><div><h3>Trouvez votre prochaine lecture</h3><p>Parcourez les livres disponibles et choisissez une histoire qui vous attire.</p></div></li>
                    <li><span class="step-number">03</span><div><h3>Écrivez au lecteur</h3><p>Échangez directement avec la personne qui possède le livre.</p></div></li>
                </ol>
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
