<?php

namespace App\Model\Entity;


class Article
{
    private string $article;

    public function __construct(string $article)
    {
        $this->article = $article;
    }

    public function save($article): string
    {
        return $this->article;
    }
}