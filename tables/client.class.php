<?php

class Client {
    private $no;
    private $nom;
    private $prenom;
    private $adresse;
    private $ville;
    private $province;
    private $codePostal;
    private $login;
    private $motPasse;
    private $email;

    public function __construct($no, $nom, $prenom, $adresse, $ville, $province, $codePostal, $login, $motPasse, $email)
    {
        $this->setNom($no);
        $this->setNom($nom);
        $this->setAnneeNaissance($prenom);
        $this->setSolde($adresse);
        $this->setNom($ville);
        $this->setAnneeNaissance($province);
        $this->setSolde($codePostal);
        $this->setNom($login);
        $this->setAnneeNaissance($motPasse);
        $this->setSolde($email);

    }
}

?>