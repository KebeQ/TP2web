<?php 
session_start();

$_SESSION['nomClient'] = $_POST['nomClient'];
$_SESSION['prenomClient'] = $_POST['prenomClient'];
$_SESSION['adresseClient'] = $_POST['adresseClient'];
$_SESSION['villeClient'] = $_POST['villeClient'];
$_SESSION['provinceClient'] = $_POST['provinceClient'];
$_SESSION['codePostal'] = $_POST['codePostal'];
$_SESSION['login'] = $_POST['login'];
$_SESSION['motDePasse'] = $_POST['motDePasse'];
$_SESSION['emailClient'] = $_POST['emailClient'];
?>
<?php
require 'classes/produit.class.php';
?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<script src="js/catalogue.js"></script> 
<?php 
require_once 'includes/connexion.php';
require_once 'includes/headEtCSS.php';
require_once 'classes/clientDAO.class.php';
?>

<body class="text-center">
        <div class="row">
         <div class="logo"><img src="img/logoSite.PNG" width="75" height="75"></div>
          <h1 class="text-center">Jeux vidéos</h1>
          </div>
        <br />
        <form method="get" action="recherche.php">
        <div class="form-row">
          <input type="text" name="nom" id="nom" required> 
         <input type="submit" value="Rechercher">
        </div>
  </form>
  <div class="client">
  <a href="modificationClient.php">Aller au profile</a>
  </div>
  <br />
        <div class="row">
          <div class="col-md-4">
           <div class="jumbotron">
            <?php
              $sql = "SELECT no, nom, description FROM produits WHERE no = 1";
              foreach ($conn->query($sql) as $row) {
                echo "<strong>". $row ['nom'] ."</strong>"."<br>";  
                echo $row['description'] ."<br>";
              }          
            ?>       
            <img src="img/Garfield.png" width="100" height="150">       
            <p><a href="pageDetails.php" class="btn btn-info btn-sm" value='1' id="1" onclick="pageDetailsValue(this.id)">Voir</a></p>
           </div>
          </div>
          <div class="col-md-4">
            <div class="jumbotron">
            <?php
              $sql = "SELECT no, nom, description FROM produits WHERE no = 2";
              foreach ($conn->query($sql) as $row) {
                echo "<strong>". $row ['nom'] ."</strong>"."<br>"; 
                echo $row['description'] ."<br>";
              }  
            ?>        
            <img src="img/Mordhau.jpg" width="100" height="150">          
            <p><a href="pageDetails.php" class="btn btn-info btn-sm" value='2' id="2" onclick="pageDetailsValue(this.id)">Voir</a></p>
            </div>
          </div>
          <div class="col-md-4">
           <div class="jumbotron">
           <?php
              $sql = "SELECT no, nom, description FROM produits WHERE no = 3";
              foreach ($conn->query($sql) as $row) {
                echo "<strong>". $row ['nom'] ."</strong>"."<br>"; 
                echo $row['description'] ."<br>";
              }  
            ?>     
            <img src="img/CallofDuty.jpg" width="100" height="150">
            <p><a href="pageDetails.php" class="btn btn-info btn-sm" value='3' id="3" onclick="pageDetailsValue(this.id)">Voir</a></p>
           </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
           <div class="jumbotron">
           <?php
              $sql = "SELECT no, nom, description FROM produits WHERE no = 4";
              foreach ($conn->query($sql) as $row) {
                echo "<strong>". $row ['nom'] ."</strong>"."<br>"; 
                echo $row['description'] ."<br>";
              }  
            ?>     
            <img src="img/Halo.png" width="100" height="150">
            <p><a href="pageDetails.php" class="btn btn-info btn-sm" value='4' id="4" onclick="pageDetailsValue(this.id)">Voir</a></p>
           </div>
          </div>
          <div class="col-md-4">
            <div class="jumbotron">
            <?php
              $sql = "SELECT no, nom, description FROM produits WHERE no = 5";
              foreach ($conn->query($sql) as $row) {
                echo "<strong>". $row ['nom'] ."</strong>"."<br>"; 
                echo $row['description'] ."<br>";
              }  
            ?>     
            <img src="img/RedDead.png" width="200" height="150">
            <p><a href="pageDetails.php" class="btn btn-info btn-sm" value='5' id="5" onclick="pageDetailsValue(this.id)">Voir</a></p>
            </div>
          </div>
          <div class="col-md-4">
           <div class="jumbotron">
           <?php
              $sql = "SELECT no, nom, description FROM produits WHERE no = 6";
              foreach ($conn->query($sql) as $row) {
                echo "<strong>". $row ['nom'] ."</strong>"."<br>"; 
                echo $row['description'] ."<br>";
              }  
            ?>     
            <img src="img/Minecraft.jpg" width="100" height="150">
            <p><a href="pageDetails.php" class="btn btn-info btn-sm" value='6' id="5" onclick="pageDetailsValue(this.id)">Voir</a></p>
           </div>
          </div>
        </div>  
</body>
</html>

