<?php

namespace App\Http\Controllers;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = [
            [
                'title' => 'Introduction à Laravel 12',
                'author' => 'Ghada',
                'content' => 'Laravel est un framework PHP moderne permettant de développer des applications web robustes.'
            ],
            [
                'title' => 'Comprendre les Middleware',
                'author' => 'Ahmed',
                'content' => 'Un middleware permet de filtrer les requêtes HTTP avant leur traitement par le contrôleur.'
            ],
            [
                'title' => 'Blade Components',
                'author' => 'Sara',
                'content' => 'Les composants Blade permettent de créer des éléments d’interface réutilisables.'
            ],
        ];

        return view('articles', [
            'articles' => $articles
        ]);
    }
}