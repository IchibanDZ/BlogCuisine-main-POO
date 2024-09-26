<?php

class Commentaire {
    private $id_com;
    private $date_com;
    private $id_article;
    private $id_utilisateur;
    private $contenu;

    public function __construct($id_com, $date_com,$id_article,$id_utilisateur, $contenu){
        $this->id_com = $id_com;
        $this->date_com = $date_com;
        $this->id_article = $id_article;
        $this->id_utilisateur = $id_utilisateur;
        $this->contenu = $contenu;
    }

    // Getter et Setter pour id_com
    public function getIdCom() {
        return $this->id_com;
    }

    public function setIdCom($id_com) {
        $this->id_com = $id_com;
    }

    // Getter et Setter pour date_com
    public function getDateCom() {
        return $this->date_com;
    }

    public function setDateCom($date_com) {
        $this->date_com = $date_com;
    }

    // Getter et Setter pour id_article
    public function getIdArticle() {
        return $this->id_article;
    }

    public function setIdArticle($id_article) {
        $this->id_article = $id_article;
    }

    // Getter et Setter pour id_utilisateur
    public function getIdUtilisateur() {
        return $this->id_utilisateur;
    }

    public function setIdUtilisateur($id_utilisateur) {
        $this->id_utilisateur = $id_utilisateur;
    }

    // Getter et Setter pour contenu
    public function getContenu() {
        return $this->contenu;
    }

    public function setContenu($contenu) {
        $this->contenu = $contenu;
    }
}

?>