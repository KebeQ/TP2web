<?php

require_once "commande.class.php";

class CommandeDAO {

    private $bd;


    public function __construct($bd)
    {
        $this->setBaseDeDonnee($bd);
    }

    public function setBaseDeDonnee(PDO $bd)
    {
    $this->bd = $bd;
    }

    public function add(Commande $commandeLoaded)
    {
        $req = $this->bd->prepare('INSERT INTO commandes (date, statut, typePaiement, noClient) VALUES (:date, :statut, :typePaiement :noClient)');

        $req->bindValue(':date', $commandeLoaded->getDate(), PDO::PARAM_STR);
        $req->bindValue(':statut', $commandeLoaded->getStatut(), PDO::PARAM_STR);
        $req->bindValue(':typePaiement', $commandeLoaded->getTypePaiement(), PDO::PARAM_STR);
        $req->bindValue(':noClient', $commandeLoaded->getNoClient(), PDO::PARAM_INT);

        $req->execute();

        $req->closeCursor();
    }

    public function get($no)
 {
     $no = (int) $no;
     $req = $this->bd->prepare('SELECT no, date, statut, typePaiement, noClient FROM commandes WHERE no=:no');
     $req->bindValue(':no', $no, PDO::PARAM_INT);

     $req->execute();

     $ligne = $req->fetch(PDO::FETCH_ASSOC);
     $commandeItem = new Commande($ligne['date'], $ligne['statut'], $ligne['typePaiement'], $ligne['noClient']);

     $commandeItem->setNo($no);
     $req->closeCursor();

     return $commandeItem;
 }

    public function update(Commande $commandeLoaded)
    {
        $req = $this->bd->prepare('UPDATE commandes SET date= :date, statut= :statut, typePaiement= :typePaiement, 
        noClient= :noClient WHERE no = :no');

        $req->bindValue(':date', $commandeLoaded->getDate(), PDO::PARAM_STR);
        $req->bindValue(':statut', $commandeLoaded->getStatut(), PDO::PARAM_STR);
        $req->bindValue(':typePaiement', $commandeLoaded->getTypePaiement(), PDO::PARAM_STR);
        $req->bindValue(':noClient', $commandeLoaded->getNoClient(), PDO::PARAM_INT);
        $req->bindValue(':no', $commandeLoaded->getNo(), PDO::PARAM_INT);

        $req->execute();

        $req->closeCursor();
    }

    public function addItem(Items_Commande $items)
    {
        $req = $this->bd->prepare('INSERT INTO items_commande (noProduit, qte) VALUES (:noProduit, :qte)');

        $req->bindValue(':noProduit', $items->getNoProduit(), PDO::PARAM_INT);
        $req->bindValue(':qte', $items->getQuantite(), PDO::PARAM_INT);

        $req->execute();

        $req->closeCursor();
    }

    public function get($noCommande)
    {
        $noCommande = (int) $noCommande;
        $req = $this->bd->prepare('SELECT noCommande, noProduit, qte FROM items_commande WHERE noCommande=:noCommande');
        $req->bindValue(':noCommande', $noCommande, PDO::PARAM_INT);
   
        $req->execute();
   
        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        $commandeItem = new Items_Commande($ligne['noCommande'], $ligne['noProduit'], $ligne['qte']);
   
        $commandeItem->setNoCommande($noCommande);
        $req->closeCursor();
   
        return $commandeItem;
    }

}
?>
