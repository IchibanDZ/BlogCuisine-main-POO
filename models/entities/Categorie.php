<?php

class Categorie {
    private $id_categorie;
    private $nom_categorie;

    public function __construct($id_categorie, $nom_categorie) {
        $this->id_categorie = $id_categorie;
        $this->nom_categorie = $nom_categorie;
}

// Getter et Setter pour id_categorie
public function getIdCategorie() {
    return $this->id_categorie;
}

public function setIdCategorie($id_categorie) {
    $this->id_categorie = $id_categorie;
}

// Getter et Setter pour nom_categorie
public function getNomCategorie() {
    return $this->nom_categorie;
}

public function setNomCategorie($nom_categorie) {
    $this->nom_categorie = $nom_categorie;
}
}

?>