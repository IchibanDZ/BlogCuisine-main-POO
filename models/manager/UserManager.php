<?php 

require_once './models/Dbconnect.php';
require_once './models/entities/Utilisateur.php';

class UserManager {
  public static function insertUserDatabase($prenom, $nom, $mdp, $email)
{
    $dbh = dbconnect();
    $stmt = $dbh->prepare($query = "INSERT INTO utilisateur (prenom, nom, mdp, email) VALUES (:prenom, :nom, :mdp, :email)");
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':mdp', $mdp);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
}

public static function getUserByEmail($email)
{
    // Connexion à la base de données
   $dbh = dbconnect();

    // Préparer et exécuter la requête
    $stmt = $dbh->prepare('SELECT * FROM utilisateur WHERE email = :email');
    $stmt->execute(['email' => $email]);

    // Récupérer l'utilisateur
    return $stmt->fetch(PDO::FETCH_CLASS, "Utilisateur");
}

public static function userConnect($email)
{
    $dbh = dbconnect();
    $stmt = $dbh->prepare($query = "SELECT * FROM utilisateur WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $stmt->setfetchMode(PDO::FETCH_CLASS, "Utilisateur");
    $result = $stmt->fetch();
    return $result;
}

public static function getAllUtilisateur()
{
    $dbh = dbconnect();
    $query = "SELECT * FROM utilisateur";
    $stmt = $dbh->query($query); //la requête va envoyer les résultats dans un objet PDO Statement qu'on ne peut pas exploiter tel quel
    $results = $stmt->fetchAll(PDO::FETCH_CLASS, "Utilisateur");
    return $results;
}

public static function getArticlesByAuthor($prenom)
{
    $dbh = dbconnect();
    $stmt = $dbh->prepare("SELECT * FROM article a JOIN utilisateur u ON a.id_utilisateur = u.id_utilisateur WHERE u.prenom = :prenom ORDER BY date_publication DESC");
    $stmt->bindParam(':prenom', $prenom);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_CLASS , "Utilisateur");
}

}
