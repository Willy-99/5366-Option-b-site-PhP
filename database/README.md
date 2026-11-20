# Initialiser la base de données TomTroc

Le projet utilise MySQL/MariaDB avec l'extension PDO de PHP. Aucun paquet externe n'est nécessaire.

## Avec XAMPP

1. Démarrer **MySQL** depuis le panneau XAMPP.
2. Ouvrir `http://localhost/phpmyadmin`.
3. Dans phpMyAdmin, ouvrir l'onglet **Importer** et importer `schema.sql`.
4. Importer ensuite `sample-data.sql` pour ajouter les lecteurs et livres d'exemple.
5. Recharger l'accueil ou ouvrir `index.php?page=livres`.

Les réglages locaux par défaut se trouvent dans `config/database.php` : hôte `127.0.0.1`, base `tomtroc`, utilisateur `root` et mot de passe vide. Pour un autre environnement, définir `DB_HOST`, `DB_NAME`, `DB_USER` et `DB_PASSWORD` dans l'environnement PHP.

Les lignes d'exemple ont `image_path = NULL`, car la photo d'un livre est facultative à la création. Le site affiche alors une couverture de remplacement. Pour afficher une vraie image, placer le fichier sous `public/images/` et enregistrer son chemin relatif, par exemple `public/images/books/mon-livre.jpg`, dans `books.image_path`.

Les comptes présents dans `sample-data.sql` servent uniquement à afficher les pseudos des vendeurs. La connexion utilisateur n'est pas encore reliée à ces comptes.
