<?php

class Commande {
    private $no;
    private $date;
    private $statut;
    private $typePaiement;
    private $noClient;

    public function __construct($no, $date, $statut, $typePaiement, $noClient)
    {
        $this->setNo($no);
        $this->setDate($date);
        $this->setStatut($statut);
        $this->setTypePaiement($typePaiement);
        $this->setNoClient($noClient);

    }

    public function setNo($no) {
        $this->no = $no;        
    }
    public function getNo() {
        return $this->no;
    }

    public function setDate($date) {
        $this->date = $date;        
    }
    public function getDate() {
        return $this->date;
    }

    public function setStatut($statut) {
        $this->statut = "En traitement";        
    }
    public function getStatut() {
        return $this->statut;
    }

    public function setTypePaiement($typePaiement) {
        $this->typePaiement = $typePaiement;        
    }
    public function getTypePaiement() {
        return $this->typePaiement;
    }

    public function setNoClient($noClient) {
        $this->noClient = $noClient;        
    }
    public function getNoClient() {
        return $this->noClient;
    }
}

?>
