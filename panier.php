<?php
session_start();
$noProduit=
$qte=1;

$produits= array();
array_push($produits,  $noProduit);
$_SESSION['noProduit'] = $produits;
$enStock= array();
array_push($enStock,  $qte);
$_SESSION['qte'] = $enStock;

?>
<?php 
require 'tables/produit.class.php';
require 'tables/commandeDAO.class.php';
require_once 'includes/connexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Panier</title>
</head>
<body>
<h1>PANIER</h1>
<?php
$management = new CommandeDAO($conn);

//Re-regarder la vidéo (la session et le array et tout se passe environ vers 23:10 et suite)
//De plus, apparemment, le panier est le plus difficile alors il faudra s'en occuper. De plus, l'inventaire est notre classe 
//produit dans la base de donnée. 
//Aussi la quantité initiale est toujours 1
//Aussi, le panier et la facture sont pareille selon la prof dans la vidéo et on a seulement besoin de copier collé (je crois)

//Array_push pour la première fois qu'un objet est ajouté au panier; Besoin de if après
if (isset($_SESSION['noProduit']) && isset($_SESSION['qte'])){
?>
<div class="row">
<div class="col-12">
<?php

    array_push($produits, $noProduit);
    array_push($enStock, $qte);
    $itemAjout = new CommandeDAO($_SESSION['noProduit'], $_SESSION['qte']);
    $management->addItem($itemAjout);
}
?>
</div>
</div>
</body>

</html>
