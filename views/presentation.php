<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Découvrez les valeurs de partage, de découverte et de communauté de Tom Troc.">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php require __DIR__ . '/partials/header.php'; ?>

    <main class="presentation-page">
        <figure class="presentation-banner-image">
            <img src="public/images/livres-bibliotheque.jpg" alt="Rayonnages remplis de livres dans une bibliothèque">
        </figure>

        <div class="values-title-band">
            <div class="section-wrap">
                <p class="eyebrow">Notre démarche</p>
                <h1 id="presentation-title">Nos valeurs</h1>
            </div>
        </div>

        <section class="values-content" aria-labelledby="presentation-title">
            <div class="section-wrap values-copy">
                <p>Chez Tom Troc, nous mettons l'accent sur le partage, la découverte et la communauté. Nos valeurs sont ancrées dans notre passion pour les livres et notre désir de créer des liens entre les lecteurs. Nous croyons en la puissance des histoires pour rassembler les gens et inspirer des conversations enrichissantes.</p>
                <p>Notre association a été fondée avec une conviction profonde : chaque livre mérite d'être lu et partagé.</p>
                <p>Nous sommes passionnés par la création d'une plateforme conviviale qui permet aux lecteurs de se connecter, de partager leurs découvertes littéraires et d'échanger des livres qui attendent patiemment sur les étagères.</p>
                <p class="values-signature">L'équipe de Tom Troc</p>
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
