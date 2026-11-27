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
        <svg class="header-icon account-icon"
            width="10"
            height="13"
            viewBox="0 0 10 13"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true">
                <mask id="stroke0_43429_914" fill="white">
                    <path d="M4.64258 9.28613C7.20652 9.28613 9.28576 10.117 9.28613 11.1426C9.28613 12.1683 7.20676 13 4.64258 13C2.07853 12.9999 0 12.1682 0 11.1426C0.000376996 10.1171 2.07876 9.28619 4.64258 9.28613ZM4.64258 0C7.20666 0 9.28598 2.07853 9.28613 4.64258C9.28613 7.20676 7.20676 9.28613 4.64258 9.28613C2.07853 9.28598 0 7.20666 0 4.64258C0.000150744 2.07862 2.07862 0.000150744 4.64258 0Z"/>
                </mask>
                <path d="M4.64258 9.28613C7.20652 9.28613 9.28576 10.117 9.28613 11.1426C9.28613 12.1682 7.20676 13 4.64258 13C2.07853 12.9999 0 12.1682 0 11.1426C0.000376996 10.1171 2.07876 9.28619 4.64258 9.28613ZM4.64258 9.28613C7.20676 9.28613 9.28613 7.20676 9.28613 4.64258C9.28598 2.07853 7.20666 0 4.64258 0C2.07862 0.000150744 0.000150744 2.07862 0 4.64258C0 7.20666 2.07853 9.28598 4.64258 9.28613Z" stroke-width="1.42" stroke="#292929" mask="url(#stroke0_43429_914)"/>
        </svg>
        Mon compte
    </a>
        <a class="header-link" href="index.php?page=connexion">Connexion</a>
    </div>
</header>
