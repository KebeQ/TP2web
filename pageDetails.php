<?php
require 'tables/produit.class.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style/pageDetails.css">
<script src="js/pageDetails.js"></script> 
<title>TP2</title>
</head>

<?php 
require_once 'includes/connexion.php';
?>

<body onload="showText()">
    <div id="jeux1">
        <img src="img/Garfield.png" width="100" height="150"> <br>
        <?php
            $sql = "SELECT no, nom, description, prix, qte, dateParution FROM produits WHERE no = 1";
            foreach ($conn->query($sql) as $row) {
                echo "Nom : " . $row['nom'] ."<br>"; 
                echo "Description : " . $row['description'] ."<br>";
                echo "Prix : " . $row['prix'] ."$" ."<br>";
                echo "Quantité : " . $row['qte'] ." " ."Exemplaires" ."<br>";
            }          
        ?>
    </div>
    
    <div id="jeux2">
        <img src="img/Mordhau.jpg" width="100" height="150"> <br>
        <?php
            $sql = "SELECT no, nom, description, prix, qte, dateParution FROM produits WHERE no = 2";
            foreach ($conn->query($sql) as $row) {
                echo "Nom : " . $row['nom'] ."<br>"; 
                echo "Description : " . $row['description'] ."<br>";
                echo "Prix : " . $row['prix'] ."$" ."<br>";
                echo "Quantité : " . $row['qte'] ." " ."Exemplaires" ."<br>";
            }          
        ?>
    </div>
    
    <div id="jeux3">
        <img src="img/CallofDuty.jpg" width="100" height="150"> <br>
        <?php
            $sql = "SELECT no, nom, description, prix, qte, dateParution FROM produits WHERE no = 3";
            foreach ($conn->query($sql) as $row) {
                echo "Nom : " . $row['nom'] ."<br>"; 
                echo "Description : " . $row['description'] ."<br>";
                echo "Prix : " . $row['prix'] ."$" ."<br>";
                echo "Quantité : " . $row['qte'] ." " ."Exemplaires" ."<br>";
            }          
        ?>
    </div>
   
    <div id="jeux4">
        <img src="img/Halo.png" width="100" height="150"> <br>
        <?php
            $sql = "SELECT no, nom, description, prix, qte, dateParution FROM produits WHERE no = 3";
            foreach ($conn->query($sql) as $row) {
                echo "Nom : " . $row['nom'] ."<br>"; 
                echo "Description : " . $row['description'] ."<br>";
                echo "Prix : " . $row['prix'] ."$" ."<br>";
                echo "Quantité : " . $row['qte'] ." " ."Exemplaires" ."<br>";
            }          
        ?>
    </div>
    
    <div id="jeux5">
        <img src="img/RedDead.png" width="200" height="150"> <br>
        <?php
            $sql = "SELECT no, nom, description, prix, qte, dateParution FROM produits WHERE no = 3";
            foreach ($conn->query($sql) as $row) {
                echo "Nom : " . $row['nom'] ."<br>"; 
                echo "Description : " . $row['description'] ."<br>";
                echo "Prix : " . $row['prix'] ."$" ."<br>";
                echo "Quantité : " . $row['qte'] ." " ."Exemplaires" ."<br>";
            }          
        ?>
    </div>

    <div id="jeux6">
        <img src="img/Minecraft.jpg" width="100" height="150"> <br>
        <?php
            $sql = "SELECT no, nom, description, prix, qte, dateParution FROM produits WHERE no = 3";
            foreach ($conn->query($sql) as $row) {
                echo "Nom : " . $row['nom'] ."<br>"; 
                echo "Description : " . $row['description'] ."<br>";
                echo "Prix : " . $row['prix'] ."$" ."<br>";
                echo "Quantité : " . $row['qte'] ." " ."Exemplaires" ."<br>";
            }          
        ?>
    </div>
</body>

</html>
