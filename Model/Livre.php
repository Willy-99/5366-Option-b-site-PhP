<?php

declare(strict_types=1);

final class Livre extends AbstractEntity
{
    private int $ownerId = -1;
    private string $title = '';
    private string $author = '';
    private string $genre = '';
    private ?string $imagePath = null;
    private string $coverColor = 'sage';
    private string $sellerPseudo = '';
    private bool $available = true;

    public function setOwnerId(int|string $ownerId): void
    {
        $this->ownerId = (int) $ownerId;
    }

    public function getOwnerId(): int
    {
        return $this->ownerId;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function setGenre(string $genre): void
    {
        $this->genre = $genre;
    }

    public function getGenre(): string
    {
        return $this->genre;
    }

    public function setImagePath(?string $imagePath): void
    {
        $this->imagePath = $imagePath;
    }

    public function getImagePath(): ?string
    {
        return $this->imagePath;
    }

    public function setCoverColor(string $coverColor): void
    {
        $this->coverColor = $coverColor;
    }

    public function getCoverColor(): string
    {
        return $this->coverColor;
    }

    public function setSellerPseudo(string $sellerPseudo): void
    {
        $this->sellerPseudo = $sellerPseudo;
    }

    public function getSellerPseudo(): string
    {
        return $this->sellerPseudo;
    }

    public function setIsAvailable(bool|int|string $available): void
    {
        $this->available = (bool) $available;
    }

    public function isAvailable(): bool
    {
        return $this->available;
    }
}
