<?php 

require_once './models/Dbconnect.php';
require_once './models/entities/Article.php';

class  ArticleManager
{ public static function getAllArticles() {
$dbh = dbconnect();
    $stmt = $dbh->prepare('SELECT * FROM article ORDER BY date_publication DESC');
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_CLASS, "Article");
}
    
}

