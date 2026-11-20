<?php

declare(strict_types=1);

final class Book
{
    public function __construct(
        private string $title,
        private string $author,
        private string $genre,
        private string $coverColor
    ) {
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
}
