<?php

namespace App\Model\Repository;

use App\Model\Repository\Article as ArticleRepository;

class Article
{
    public function __construct()
    {
    }

    public function save(article $article): Article
    {
        return $article;
    }
}