CREATE DATABASE IF NOT EXISTS tomtroc
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

USE tomtroc;

CREATE TABLE IF NOT EXISTS users (
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    pseudo VARCHAR(80) NOT NULL,
    email VARCHAR(190) NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    avatar_path VARCHAR(255) NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    UNIQUE KEY uq_users_email (email)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS books (
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    owner_id BIGINT UNSIGNED NOT NULL,
    title VARCHAR(180) NOT NULL,
    author VARCHAR(160) NOT NULL,
    genre VARCHAR(80) NOT NULL,
    description TEXT NULL,
    image_path VARCHAR(255) NULL,
    cover_color VARCHAR(24) NOT NULL DEFAULT 'sage',
    is_available TINYINT(1) NOT NULL DEFAULT 1,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    KEY idx_books_available_created (is_available, created_at),
    KEY idx_books_title (title),
    CONSTRAINT fk_books_owner FOREIGN KEY (owner_id) REFERENCES users (id)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;
