<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">

    <title>Articles</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

<div class="articles-container">

    <h1>📰 Liste des articles</h1>

    <x-alert type="success">
        Article ajouté avec succès !
    </x-alert>

    <x-alert type="error">
        Une erreur est survenue lors du chargement d'un article.
    </x-alert>

    <x-alert type="info">
        Consultez régulièrement nos nouveaux articles.
    </x-alert>

    @foreach ($articles as $article)

        <x-article-card
            :title="$article['title']"
            :author="$article['author']"
        >
            {{ $article['content'] }}
        </x-article-card>

    @endforeach

</div>

</body>
</html>