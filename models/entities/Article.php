<?php 

class Article {
    private $id_article;
    private $titre;
    private $contenu;
    private $date_publication;
    private $id_auteur;
    private $image;
    private $id_utilisateur;
    private $id_categorie;

    // public function __construct($id_article, $titre, $contenu, $date_publication, $id_auteur, $image, $id_utilisateur, $id_categorie) {
    //     $this->id_article = $id_article;
    //     $this->titre = $titre;
    //     $this->contenu = $contenu;
    //     $this->date_publication = $date_publication;
    //     $this->id_auteur = $id_auteur;
    //     $this->image = $image;
    //     $this->id_utilisateur = $id_utilisateur;
    //     $this->id_categorie = $id_categorie;
    // }

    // Getter et Setter pour id_article
    public function getIdArticle() {
        return $this->id_article;
    }

    public function setIdArticle($id_article) {
        $this->id_article = $id_article;
    }

    // Getter et Setter pour titre
    public function getTitre() {
        return $this->titre;
    }

    public function setTitre($titre) {
        $this->titre = $titre;
    }

    // Getter et Setter pour contenu
    public function getContenu() {
        return $this->contenu;
    }

    public function setContenu($contenu) {
        $this->contenu = $contenu;
    }

    // Getter et Setter pour date_publication
    public function getDatePublication() {
        return $this->date_publication;
    }

    public function setDatePublication($date_publication) {
        $this->date_publication = $date_publication;
    }

    // Getter et Setter pour id_auteur
    public function getIdAuteur() {
        return $this->id_auteur;
    }

    public function setIdAuteur($id_auteur) {
        $this->id_auteur = $id_auteur;
    }

    // Getter et Setter pour image
    public function getImage() {
        return $this->image;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    // Getter et Setter pour id_utilisateur
    public function getIdUtilisateur() {
        return $this->id_utilisateur;
    }

    public function setIdUtilisateur($id_utilisateur) {
        $this->id_utilisateur = $id_utilisateur;
    }

    // Getter et Setter pour id_categorie
    public function getIdCategorie() {
        return $this->id_categorie;
    }

    public function setIdCategorie($id_categorie) {
        $this->id_categorie = $id_categorie;
    }

}

?>