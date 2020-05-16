<?php
session_start();
$produits= array();
array_push($produits,  $no);
$_SESSION['no'] = $produits;
$enStock= array();
array_push($enStock,  $qte);
$_SESSION['qte'] = $enStock;

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Panier</title>
</head>
<body>
<?php
//Re-regarder la vidéo (la session et le array et tout se passe environ vers 23:10 et suite)
//De plus, apparemment, le panier est le plus difficile alors il faudra s'en occuper. De plus, l'inventaire est notre classe 
//produit dans la base de donnée. 
//Aussi la quantité initiale est toujours 1
//Aussi, le panier et la facture sont pareille selon la prof dans la vidéo et on a seulement besoin de copier collé (je crois)

//Array_push pour la première fois qu'un objet est ajouté au panier; 
?>
</body>

</html>
