<?php
require_once 'functions.php';
require_once 'partials/header.php';
require_once './models/manager/ArticleManager.php'; 
?>

<div class="articles-container">
    <?php
    $articles = ArticleManager::getAllArticles(); // Récupère tous les articles de la BDD

    foreach ($articles as $article) {
        echo '<div class="article">';
        echo '<h2><a href="showarticle.php?id_article=' . $article->getIdArticle() . '">' . htmlspecialchars($article->getTitre()) . '</a></h2>';


        // Afficher l'image associée à l'article
        if (!empty($article->getImage())) {
            echo '<img src="' . htmlspecialchars($article->getImage()) . '" alt="Image de l\'article" class="article-image">';
        }
        echo '<p>Publié par <a href="author_articles.php?id_auteur=' . htmlspecialchars($article->getIdAuteur()) . '">' . htmlspecialchars($article->getIdAuteur()) . '</a> le ' . htmlspecialchars($article->getDatePublication()) . '</p>';
        echo '</div>'; // Fermeture de la div .article
    }
    ?>
</div>

<?php
require_once 'partials/footer.php';
?>
