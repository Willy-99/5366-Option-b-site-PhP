USE tomtroc;

INSERT INTO users (pseudo, email, password_hash) VALUES
    ('Camille R.', 'camille@example.test', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2uheWG/igi.'),
    ('Noé Bernard', 'noe@example.test', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2uheWG/igi.'),
    ('Mila Perrin', 'mila@example.test', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2uheWG/igi.'),
    ('Louis Arnaud', 'louis@example.test', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2uheWG/igi.')
ON DUPLICATE KEY UPDATE pseudo = VALUES(pseudo);

-- Met aussi à jour les quatre livres de démonstration si l'ancien jeu d'exemple est déjà installé.
UPDATE books AS book
INNER JOIN users AS owner ON owner.id = book.owner_id
SET book.title = 'Esther',
    book.author = 'Alabaster',
    book.genre = 'Photographie',
    book.description = 'Un livre proposé à l’échange par un membre de TomTroc.',
    book.image_path = 'public/images/book-esther-alabaster.png',
    book.cover_color = 'sage',
    book.created_at = NOW()
WHERE owner.email = 'camille@example.test'
  AND book.title = 'Les heures tranquilles'
  AND book.author = 'Élise Moreau';

UPDATE books AS book
INNER JOIN users AS owner ON owner.id = book.owner_id
SET book.title = 'The Kinfolk Table',
    book.author = 'Nathan Williams',
    book.genre = 'Cuisine',
    book.description = 'Un livre proposé à l’échange par un membre de TomTroc.',
    book.image_path = 'public/images/book-kinfolk-table.png',
    book.cover_color = 'terracotta',
    book.created_at = NOW() - INTERVAL 1 MINUTE
WHERE owner.email = 'noe@example.test'
  AND book.title = 'Là où l’on revient'
  AND book.author = 'Noé Bernard';

UPDATE books AS book
INNER JOIN users AS owner ON owner.id = book.owner_id
SET book.title = 'Wabi Sabi',
    book.author = 'Beth Kempton',
    book.genre = 'Bien-être',
    book.description = 'Un livre proposé à l’échange par un membre de TomTroc.',
    book.image_path = 'public/images/book-wabi-sabi.png',
    book.cover_color = 'blue',
    book.created_at = NOW() - INTERVAL 2 MINUTE
WHERE owner.email = 'mila@example.test'
  AND book.title = 'La couleur du silence'
  AND book.author = 'Mila Perrin';

UPDATE books AS book
INNER JOIN users AS owner ON owner.id = book.owner_id
SET book.title = 'Milk & honey',
    book.author = 'Rupi Kaur',
    book.genre = 'Poésie',
    book.description = 'Un livre proposé à l’échange par un membre de TomTroc.',
    book.image_path = 'public/images/book-milk-and-honey.png',
    book.cover_color = 'yellow',
    book.created_at = NOW() - INTERVAL 3 MINUTE
WHERE owner.email = 'louis@example.test'
  AND book.title = 'Un été à soi'
  AND book.author = 'Louis Arnaud';

INSERT INTO books (owner_id, title, author, genre, description, image_path, cover_color, is_available, created_at)
SELECT users.id, sample.title, sample.author, sample.genre, sample.description, sample.image_path, sample.cover_color, 1, sample.created_at
FROM users
JOIN (
    SELECT 'camille@example.test' AS email, 'Esther' AS title, 'Alabaster' AS author, 'Photographie' AS genre, 'Un livre proposé à l’échange par un membre de TomTroc.' AS description, 'public/images/book-esther-alabaster.png' AS image_path, 'sage' AS cover_color, NOW() AS created_at
    UNION ALL
    SELECT 'noe@example.test', 'The Kinfolk Table', 'Nathan Williams', 'Cuisine', 'Un livre proposé à l’échange par un membre de TomTroc.', 'public/images/book-kinfolk-table.png', 'terracotta', NOW() - INTERVAL 1 MINUTE
    UNION ALL
    SELECT 'mila@example.test', 'Wabi Sabi', 'Beth Kempton', 'Bien-être', 'Un livre proposé à l’échange par un membre de TomTroc.', 'public/images/book-wabi-sabi.png', 'blue', NOW() - INTERVAL 2 MINUTE
    UNION ALL
    SELECT 'louis@example.test', 'Milk & honey', 'Rupi Kaur', 'Poésie', 'Un livre proposé à l’échange par un membre de TomTroc.', 'public/images/book-milk-and-honey.png', 'yellow', NOW() - INTERVAL 3 MINUTE
) AS sample ON sample.email = users.email
WHERE NOT EXISTS (
    SELECT 1
    FROM books AS existing_book
    WHERE existing_book.owner_id = users.id
      AND existing_book.title = sample.title
      AND existing_book.author = sample.author
);
