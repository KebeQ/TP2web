<?php
session_start();
$noProduit= $_SESSION['noProduitTrouve'];
$qte=1;

$produits= array();
array_push($produits,  $noProduit);
$_SESSION['noProduit'] = $produits;
$enStock= array();
array_push($enStock,  $qte);
$_SESSION['qte'] = $enStock;

?>
<?php 
require 'classes/produit.class.php';
require 'classes/commandeDAO.class.php';
require 'includes/connexion.php';
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

if (isset($_SESSION['noProduit']) && isset($_SESSION['qte'])){
?>
<div class="row">
<div class="col-12">
<?php

    array_push($produits, $noProduit);
    array_push($enStock, $qte);
    $management->addItem($noProduit, $qte);
}
?>
</div>
</div>
</body>

</html>
