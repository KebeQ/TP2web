<?php

class Produit {
    private $no;
    private $nom;
    private $description;
    private $prix;
    private $qte;
    private $dateParution;

    public function __construct($no, $nom, $description, $prix, $qte, $dateParution)
    {
        $this->setNom($nom);
        $this->setDescription($description);
        $this->setPrix($prix);
        $this->setQte($qte);
        $this->setDate($dateParution);
    }

    public function setNom($nom) {
        $this->nom = $nom;        
    }
    public function getNom() {
        return $this->nom;
    }

    public function setDescription($description) {
        $this->description = $description;
    }
    public function getDescription() {
        return $this->description;
    }

    public function setPrix($prix) {
        $this->prix = $prix;
    }
    public function getPrix() {
        return $this->prix;
    }

    public function setQte($qte) {
        $this->qte = $qte;
    }
    public function getQte() {
        return $this->qte;
    }

    public function setDate($dateParution) {
        $this->dateParution = $dateParution;
    }
    public function getDate() {
        return $this->dateParution;
    }
}

?>
