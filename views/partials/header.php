<header class="site-header">
    <a class="brand" href="index.php" aria-label="TomTroc, accueil">
        <span class="brand-mark" aria-hidden="true"><span>T</span><span>T</span></span>
        <span>TomTroc</span>
    </a>

    <nav class="main-nav" aria-label="Navigation principale">
        <a class="<?= $currentPage === 'accueil' ? 'is-current' : '' ?>" href="index.php" <?= $currentPage === 'accueil' ? 'aria-current="page"' : '' ?>>Accueil</a>
        <a class="<?= $currentPage === 'livres' ? 'is-current' : '' ?>" href="index.php?page=livres" <?= $currentPage === 'livres' ? 'aria-current="page"' : '' ?>>Nos livres à l’échange</a>
    </nav>

    <div class="header-actions">
        <a class="header-login" href="index.php?page=messagerie">
            <svg class="header-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M20 11.5a7.5 7.5 0 0 1-7.5 7.5H5l1.7-3.2A7.5 7.5 0 1 1 20 11.5Z" />
                <path d="M8.5 11.5h.01M12.5 11.5h.01M16.5 11.5h.01" />
            </svg>
            Messagerie
        </a>
        <a class="header-login" href="index.php?page=compte">
            <svg class="header-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <circle cx="12" cy="8" r="3.2" />
                <path d="M5.5 20a6.5 6.5 0 0 1 13 0" />
            </svg>
            Mon compte
        </a>
        <a class="header-link" href="index.php?page=connexion">Connexion</a>
    </div>
</header>
