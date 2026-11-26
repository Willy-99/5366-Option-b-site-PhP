<!doctype html>
<html lang="fr">
<?php
$pageDescription = 'TomTroc met en relation les lecteurs pour partager et échanger leurs livres.';
require __DIR__ . '/partials/head.php';
?>
<body class="page-home">
    <?php require __DIR__ . '/partials/header.php'; ?>

    <main>
        <section class="hero" aria-labelledby="hero-title">
            <div class="hero-copy">
                <h1 id="hero-title">Rejoignez nos lecteurs passionnés</h1>
                <p class="hero-intro">Donnez une nouvelle vie à vos livres en les échangeant avec d'autres amoureux de la lecture. Nous croyons en la magie du partage de connaissances et d'histoires à travers les livres.</p>
                <a class="button button-green" href="index.php?page=livres">Découvrir</a>
            </div>

            <div class="hero-art hero-photo">
                <img src="public/images/home-bookshop-hamza.png" alt="Un homme lit devant une librairie remplie de livres d’occasion">
                <span class="image-credit">Hamza</span>
            </div>
        </section>

        <section class="catalogue section-wrap" id="catalogue" aria-labelledby="catalogue-title">
            <div class="section-heading">
                <h2 id="catalogue-title">Les derniers livres ajoutés</h2>
            </div>

            <div class="book-grid home-book-grid">
                <?php if ($livres === []): ?>
                    <p class="empty-results">Aucun livre n’a encore été proposé à l’échange.</p>
                <?php else: ?>
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
                                    <p class="book-seller">Vendu par : <?= htmlspecialchars($livre->getSellerPseudo(), ENT_QUOTES, 'UTF-8') ?></p>
                                </div>
                                <span class="available">Disponible</span>
                            </div>
                        </article>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <div class="catalogue-actions">
                <a class="button button-green" href="index.php?page=livres">Voir tous les livres</a>
            </div>
        </section>

        <section class="how-it-works" id="fonctionnement" aria-labelledby="how-title">
            <div class="section-wrap how-inner">
                <div class="how-heading">
                    <h2 id="how-title">Comment ça marche ?</h2>
                    <p class="how-intro">Échanger des livres avec TomTroc c'est simple et amusant ! Suivez ces étapes pour commencer :</p>
                </div>
                <ol class="steps">
                    <li><p>Inscrivez-vous gratuitement sur notre plateforme.</p></li>
                    <li><p>Ajoutez les livres que vous souhaitez échanger à votre profil.</p></li>
                    <li><p>Parcourez les livres disponibles chez d'autres membres.</p></li>
                    <li><p>Proposez un échange et discutez avec d'autres passionnés de lecture.</p></li>
                </ol>
                <div class="how-actions">
                    <a class="button button-light" href="index.php?page=livres">Voir tous les livres</a>
                </div>
            </div>
        </section>

        <section class="values-section" aria-labelledby="values-title">
            <figure class="values-banner">
                <img src="public/images/values-library-banner.png" alt="Une lectrice devant des rayonnages de livres" loading="lazy">
            </figure>
            <article class="section-wrap values-article">
                <h2 id="values-title">Nos valeurs</h2>
                <p>Chez Tom Troc, nous mettons l'accent sur le partage, la découverte et la communauté. Nos valeurs sont ancrées dans notre passion pour les livres et notre désir de créer des liens entre les lecteurs. Nous croyons en la puissance des histoires pour rassembler les gens et inspirer des conversations enrichissantes.</p>
                <p class="values-highlight">Notre association a été fondée avec une conviction profonde : chaque livre mérite d'être lu et partagé.</p>
                <p>Nous sommes passionnés par la création d'une plateforme conviviale qui permet aux lecteurs de se connecter, de partager leurs découvertes littéraires et d'échanger des livres qui attendent patiemment sur les étagères.</p>
                <p class="values-signature"><span>L'équipe de Tom Troc</span><img src="public/images/green-heart.svg" alt="" aria-hidden="true"></p>
            </article>
        </section>
    </main>

    <footer class="site-footer home-footer">
        <a class="brand brand-footer" href="index.php" aria-label="Tom Troc, accueil"><span class="brand-mark" aria-hidden="true">t.</span><span>TomTroc</span></a>
        <div class="footer-links" aria-label="Informations">
            <span>Politique de confidentialité</span>
            <span>Mentions légales</span>
        </div>
        <span class="footer-copyright">Tom Troc ©</span>
    </footer>
</body>
</html>
