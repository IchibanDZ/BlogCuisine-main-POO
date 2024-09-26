<?php

class Utilisateur {
    private $id_utilisateur;
    private $nom;
    private $email;
    private $mdp;
    private $role;
    private $prenom;

// public function __construct($id_utilisateur,$nom,$email,$mdp,$role,$prenom ){
//     $this->id_utilisateur = $id_utilisateur;
//     $this->nom = $nom;
//     $this->email = $email;
//     $this->mdp = $mdp;
//     $this->role = $role;
//     $this->prenom = $prenom

// }
// Getter et Setter pour id_utilisateur
public function getIdUtilisateur() {
    return $this->id_utilisateur;
}

public function setIdUtilisateur($id_utilisateur) {
    $this->id_utilisateur = $id_utilisateur;
}

// Getter et Setter pour nom
public function getNom() {
    return $this->nom;
}

public function setNom($nom) {
    $this->nom = $nom;
}

// Getter et Setter pour email
public function getEmail() {
    return $this->email;
}

public function setEmail($email) {
    $this->email = $email;
}

// Getter et Setter pour mdp (mot de passe)
public function getMdp() {
    return $this->mdp;
}

public function setMdp($mdp) {
    $this->mdp = $mdp;
}

// Getter et Setter pour role
public function getRole() {
    return $this->role;
}

public function setRole($role) {
    $this->role = $role;
}

// Getter et Setter pour prenom
public function getPrenom() {
    return $this->prenom;
}

public function setPrenom($prenom) {
    $this->prenom = $prenom;
}
}

?>