<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Recherche</title>
</head>
<body>
<a href="catalogue.php">Retour au catalogue</a>
<?php
require_once('includes/connexion.php');
?>
<?php
try {
    $verification = $conn->prepare('SELECT nom, description, prix, qte, dateParution, image FROM produits WHERE nom = :nom');
    $verification->bindValue(':nom', $_GET['nom'], PDO::PARAM_STR);
    $verification->execute();

}

catch (PDOException $e) { 
    exit( "Erreur de lecture de BD: " .  $e -> getMessage()); 
} 

?>

<?php 
$nbLignes = $verification->rowCount();
if($nbLignes ==0)
{
    echo "<b><h3>" . "Aucun résultat obtenu" . "</h3></b>";
}

?>

<?php /*
if ($nbLignes >=1)
{
$jeu = $verification->fetch()
    ?>
    
        <div class="row">
            <label for="fabricant">Fabricant: </label><input type="text" name="fabricant" id="fabricant"
            value=<?php echo $voiture['Fabricant'] ?>>
        </div>
        <div class="form-row">
            <label for="modele">Modèle: </label><input type="text" name="modele" id="modele" 
            value=<?php echo $voiture['Modele'] ?>> 
        </div>
        <div class="form-row">
            <label for="couleur">Couleur: </label><input type="text" name="couleur" id="couleur"
            value=<?php echo $voiture['Couleur'] ?>>
        </div>
        <div class="form-row">
            <label for="prix">Prix: </label><input type="text" name="prix" id="prix"
            value=<?php echo $voiture['Prix'] ?>>
        </div>

<?php
}*/
?>

<?php
    $verification->closeCursor();

    $conn = NULL;

    ?>

</body>
</html>