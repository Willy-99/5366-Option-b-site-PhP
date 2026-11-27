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
	<svg class="header-icon message-icon"
        width="15"
        height="14"
        viewBox="0 0 15 14"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
        aria-hidden="true">
        <mask id="stroke0_41656_382" fill="white">
		    <path d="M12.7648 11.1293C14.1447 9.95044 15 8.31177 15 6.5C15 2.91016 11.6421 0 7.5 0C3.35791 0 0 2.91016 0 6.5C0 10.0898 3.35791 13 7.5 13C8.74377 13 9.91675 12.7375 10.9493 12.2732C10.9642 12.2863 10.9808 12.2983 10.999 12.3088L12.349 13.0883C12.5491 13.2037 12.7991 13.0593 12.7991 12.8284V11.2695C12.7991 11.2178 12.7865 11.1704 12.7648 11.1293Z"/>
	    </mask>
	    <path d="M15 6.5C15 8.31177 14.1447 9.95044 12.7648 11.1293C12.7865 11.1704 12.7991 11.2178 12.7991 11.2695V12.8284C12.7991 13.0593 12.5491 13.2037 12.349 13.0883L10.999 12.3088C10.9808 12.2983 10.9642 12.2863 10.9493 12.2732C9.91675 12.7375 8.74377 13 7.5 13C3.35791 13 0 10.0898 0 6.5C0 2.91016 3.35791 0 7.5 0C11.6421 0 15 2.91016 15 6.5Z" stroke-width="1.42" stroke="#292929" mask="url(#stroke0_41656_382)"/>
    </svg>
	Messagerie
    <span class="message-count" aria-label="4 messages non lus">4</span>
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
