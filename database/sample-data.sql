USE tomtroc;

INSERT INTO users (pseudo, email, password_hash) VALUES
    ('Camille R.', 'camille@example.test', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2uheWG/igi.'),
    ('Noé Bernard', 'noe@example.test', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2uheWG/igi.'),
    ('Mila Perrin', 'mila@example.test', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2uheWG/igi.'),
    ('Louis Arnaud', 'louis@example.test', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2uheWG/igi.')
ON DUPLICATE KEY UPDATE pseudo = VALUES(pseudo);

INSERT INTO books (owner_id, title, author, genre, description, image_path, cover_color, is_available)
SELECT users.id, sample.title, sample.author, sample.genre, sample.description, sample.image_path, sample.cover_color, 1
FROM users
JOIN (
    SELECT 'camille@example.test' AS email, 'Les heures tranquilles' AS title, 'Élise Moreau' AS author, 'Roman' AS genre, 'Un roman à découvrir et à partager.' AS description, NULL AS image_path, 'sage' AS cover_color
    UNION ALL
    SELECT 'noe@example.test', 'Là où l’on revient', 'Noé Bernard', 'Récit', 'Un récit proposé par un lecteur de la communauté.', NULL, 'terracotta'
    UNION ALL
    SELECT 'mila@example.test', 'La couleur du silence', 'Mila Perrin', 'Littérature', 'Une histoire pour les amateurs de littérature.', NULL, 'blue'
    UNION ALL
    SELECT 'louis@example.test', 'Un été à soi', 'Louis Arnaud', 'Roman', 'Un livre prêt à voyager vers un autre lecteur.', NULL, 'yellow'
) AS sample ON sample.email = users.email
WHERE NOT EXISTS (
    SELECT 1
    FROM books AS existing_book
    WHERE existing_book.owner_id = users.id
      AND existing_book.title = sample.title
      AND existing_book.author = sample.author
);
