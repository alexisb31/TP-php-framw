<?php

namespace App\Controllers;
use App\Models\Article;
use Core\Controller;

class ArticleController extends Controller
{
    public function show($slug, $id)
    {
        $article = Article::find($id);

        if ($article->getSlug() !== $slug) {
            $this->redirect($article->getUrl());
        }
        $metaTitle = 'TP : Article - ' . $id;
        return $this->render('article.show', compact('article', 'metaTitle'));
    }
}