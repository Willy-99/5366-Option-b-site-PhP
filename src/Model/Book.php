<?php

declare(strict_types=1);

final class Book
{
    public function __construct(
        private int $id,
        private string $title,
        private string $author,
        private string $genre,
        private ?string $imagePath,
        private string $coverColor,
        private string $sellerPseudo,
        private bool $available
    ) {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getGenre(): string
    {
        return $this->genre;
    }

    public function getCoverColor(): string
    {
        return $this->coverColor;
    }

    public function getImagePath(): ?string
    {
        return $this->imagePath;
    }

    public function getSellerPseudo(): string
    {
        return $this->sellerPseudo;
    }

    public function isAvailable(): bool
    {
        return $this->available;
    }
}
