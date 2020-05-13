<?php

class Items_Commande {
    private $noCommande;
    private $noProduit;
    private $qte;

    public function __construct($noCommande, $date, $noProduit)
    {
        $this->setNoCommande($noCommande);
        $this->setNoProduit($noProduit);
        $this->setQuantite($qte);
    }

    public function setNoCommande($noCommande) {
        $this->noCommande = $noCommande;        
    }
    public function getNoCommande() {
        return $this->noCommande;
    }

    public function setNoProduit($noProduit) {
        $this->noProduit = $noProduit;        
    }
    public function getNoProduit() {
        return $this->noProduit;
    }

    public function setQuantite($qte) {
        if ($qte == 0)
            {
            trigger_error('Désolé, ce produit est indisponible');
            return;


        $this->qte = $qte;        
    }
    public function getQuantite() {
        return $this->qte;
    }
}

?>
