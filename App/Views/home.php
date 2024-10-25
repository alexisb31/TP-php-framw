<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Articles</title>
    <style>
        body {
            font-family: , sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
        }

        header, footer {
            background-color: #87CEEB;
            color: white;
            text-align: center;
            padding: 20px;
        }

        main {
            width: 100%;
            max-width: 1024px;
            margin: 30px auto;
            padding: 0 16px;
        }

        .article-card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
        }

        .article-card:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .article-title {
            font-size: 1.25em;
            font-weight: 500;
            color: #333;
            text-decoration: none;
        }

        .article-title:hover {
            color: #007acc;
            text-decoration: underline;
        }

        .article-content {
            margin-top: 10px;
            font-size: 0.95em;
            color: #555;
            cursor: default;
            user-select: none;
        }

        .read-more {
            display: inline-flex;
            align-items: center;
            margin-top: 15px;
            font-size: 0.9em;
            font-weight: bold;
            color: #007acc;
            text-decoration: none;
            gap: 5px;
        }

        .read-more:hover {
            text-decoration: underline;
        }

        .arrow {
            display: inline-block;
            transition: transform 0.2s ease;
        }

        .read-more:hover .arrow {
            transform: translateX(4px);
        }
    </style>
</head>
<body>

<?php require('layouts/header.php'); ?>

<main>
    <?php foreach ($articles as $article): ?>
        
    <article class="article-card">
        <a href="<?= $article->getUrl() ?>" class="article-title">
            <h2><?= htmlspecialchars($article->title) ?></h2>
        </a>
        <div class="article-content">

            <?= nl2br(htmlspecialchars(substr($article->content, 0, 100))) ?>

        </div>
        <a href="<?= $article->getUrl() ?>" class="read-more">
            détails<span 
            
                class="arrow">&rarr;

            </span>
        </a>
    </article>

    <?php endforeach; ?>
</main>

<?php require('layouts/footer.php'); ?>

</body>
</html>
