<?php
namespace App\Controllers;
use App\Models\Article;
use Core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $article = Article::get();
        $metaTitle = 'TP : Accueil';
        return $this->render('home', compact('articles', 'metaTitle'));
    }
}