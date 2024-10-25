<?php require(__DIR__ . '/../layouts/header.php'); ?>

<article class="article-container">
    <h1 class="article-title">
        <?= $article->title ?>
    </h1>
    <div class="article-content">
        <?= $article->content ?>
    </div>
</article>

<?php require(__DIR__ . '/../layouts/footer.php'); ?>

<style>
  
    .article-container {
        max-width: 1200px;
        margin: 2rem auto;
        padding: 1rem;
        padding-left: 2rem;
        background-color: #fff;
    }

 
    .article-title {
        font-size: 2.5rem;
        font-weight: 500;
        color: #333;
        margin-bottom: 1.5rem;
        text-align: left;
    }

 
    .article-content {
        font-size: 1rem;
        color: #555;
        line-height: 1.8;
        margin-bottom: 2rem;
        max-width: 90%;
    }

    body {
        background-color: #f3f4f6;
        font-family: Arial, sans-serif;
        margin: 0;
    }
</style>
