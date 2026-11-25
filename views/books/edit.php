<!doctype html>
<html lang="fr">
<?php
$pageDescription = 'Modifiez les informations d’un livre proposé sur TomTroc.';
require __DIR__ . '/../partials/head.php';
?>
<body>
    <?php require __DIR__ . '/../partials/header.php'; ?>

    <main class="catalogue-page">
        <section class="catalogue-intro">
            <p class="eyebrow">Votre bibliothèque</p>
            <h1>Modifier un livre</h1>
            <p>Les informations du livre sont chargées depuis la base de données.</p>
        </section>

        <section class="section-wrap book-edit-section">
            <a class="text-link" href="index.php?page=livre&amp;id=<?= $livre->getId() ?>">← Retour au livre</a>
            <p class="form-notice">Cette étape affiche le formulaire prérempli. L’enregistrement des modifications sera ajouté ensuite.</p>

            <form class="auth-form book-edit-form">
                <label for="book-title">Titre</label>
                <input id="book-title" type="text" value="<?= htmlspecialchars($livre->getTitle(), ENT_QUOTES, 'UTF-8') ?>" disabled>

                <label for="book-author">Auteur</label>
                <input id="book-author" type="text" value="<?= htmlspecialchars($livre->getAuthor(), ENT_QUOTES, 'UTF-8') ?>" disabled>

                <label for="book-genre">Genre</label>
                <input id="book-genre" type="text" value="<?= htmlspecialchars($livre->getGenre(), ENT_QUOTES, 'UTF-8') ?>" disabled>

                <button class="button button-green auth-submit" type="button" disabled>Enregistrement à venir</button>
            </form>
        </section>
    </main>

    <footer class="site-footer">
        <a class="brand brand-footer" href="index.php"><span class="brand-mark" aria-hidden="true">t.</span><span>TomTroc</span></a>
        <p>Les belles histoires ne restent pas sur une étagère.</p>
    </footer>
</body>
</html>
