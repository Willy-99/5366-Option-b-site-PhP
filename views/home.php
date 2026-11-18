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
    <header class="site-header">
        <a class="brand" href="index.php" aria-label="TomTroc, accueil">
            <span class="brand-mark" aria-hidden="true">t.</span>
            <span>TomTroc</span>
        </a>

        <nav class="main-nav" aria-label="Navigation principale">
            <a class="is-current" href="index.php" aria-current="page">Accueil</a>
            <a href="#catalogue">Nos livres</a>
            <a href="#fonctionnement">Comment ça marche</a>
        </nav>

        <a class="header-link" href="#catalogue">Découvrir les livres <span aria-hidden="true">↗</span></a>
    </header>

    <main>
        <section class="hero" aria-labelledby="hero-title">
            <div class="hero-copy">
                <p class="eyebrow"><span class="eyebrow-dot" aria-hidden="true"></span> La bibliothèque qui circule</p>
                <h1 id="hero-title">Un livre lu<br>est un livre <em>à partager.</em></h1>
                <p class="hero-intro">TomTroc met en relation des lecteurs passionnés pour donner une nouvelle vie aux livres et faire de belles découvertes.</p>
                <a class="button button-dark" href="#catalogue">Explorer les livres <span aria-hidden="true">→</span></a>
                <p class="hero-note">Des histoires à lire. Des lecteurs à rencontrer.</p>
            </div>

            <div class="hero-art" aria-label="Quelques livres prêts à être partagés">
                <div class="art-note">À lire<br>et à faire<br>voyager <span aria-hidden="true">↗</span></div>
                <div class="book-stack" aria-hidden="true">
                    <div class="book book-one"><span>LES JOURS<br>BLEUS</span><small>Camille R.</small></div>
                    <div class="book book-two"><span>LE GOÛT<br>DES MOTS</span><small>Anna Lenoir</small></div>
                    <div class="book book-three"><span>LA MAISON<br>DES MARÉES</span><small>Jules Martin</small></div>
                </div>
                <div class="art-caption"><span class="caption-line"></span> Une histoire continue ailleurs.</div>
            </div>
        </section>

        <section class="catalogue section-wrap" id="catalogue" aria-labelledby="catalogue-title">
            <div class="section-heading">
                <div>
                    <p class="eyebrow">À découvrir en ce moment</p>
                    <h2 id="catalogue-title">Des livres, des histoires.</h2>
                </div>
                <a class="text-link" href="#fonctionnement">Voir comment ça marche <span aria-hidden="true">→</span></a>
            </div>

            <div class="book-grid">
                <article class="book-card">
                    <div class="cover cover-sage"><span class="cover-label">ROMAN</span><span class="cover-title">Les heures<br>tranquilles</span><span class="cover-author">ÉLISE MOREAU</span></div>
                    <div class="book-info"><div><h3>Les heures tranquilles</h3><p>Élise Moreau</p></div><span class="available">Disponible</span></div>
                </article>
                <article class="book-card">
                    <div class="cover cover-terracotta"><span class="cover-label">RÉCIT</span><span class="cover-title">Là où<br>l'on revient</span><span class="cover-author">NOÉ BERNARD</span></div>
                    <div class="book-info"><div><h3>Là où l'on revient</h3><p>Noé Bernard</p></div><span class="available">Disponible</span></div>
                </article>
                <article class="book-card">
                    <div class="cover cover-blue"><span class="cover-label">LITTÉRATURE</span><span class="cover-title">La couleur<br>du silence</span><span class="cover-author">MILA PERRIN</span></div>
                    <div class="book-info"><div><h3>La couleur du silence</h3><p>Mila Perrin</p></div><span class="available">Disponible</span></div>
                </article>
                <article class="book-card">
                    <div class="cover cover-yellow"><span class="cover-label">ROMAN</span><span class="cover-title">Un été<br>à soi</span><span class="cover-author">LOUIS ARNAUD</span></div>
                    <div class="book-info"><div><h3>Un été à soi</h3><p>Louis Arnaud</p></div><span class="available">Disponible</span></div>
                </article>
            </div>
            <p class="catalogue-footnote">Les livres présentés ici sont des exemples visuels. Le catalogue sera relié aux données du site dans la prochaine étape.</p>
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
        <span class="footer-credit">Fait pour les lecteurs <span aria-hidden="true">♡</span></span>
    </footer>
</body>
</html>
