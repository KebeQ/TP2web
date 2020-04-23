<?php
require 'tables/client.class.php';
?>

<!DOCTYPE html>
<html lang="en">
<?php 
require_once 'includes/connexion.php';
require 'includes/headEtCSS.php';
?>
<body class="text-center">
        <div class="row">
         <div class="logo"><img src="img/logoSite.PNG" width="75" height="75"></div>
          <h1 class="text-center">Jeux vidéos</h1>
          </div>
        <br />
        <form method="get" action="index.php">
        <div class="form-row">
          <input type="text" name="nom" id="nom" required> 
          <input type="submit" value="Rechercher">
        </div>
  </form>
  <br />
        <div class="row">
          <div class="col-md-4">
           <div class="jumbotron">
            <h4>Objet</h4>
          <p>Description</p>
            <p><button href="pageDetails.php" class="btn btn-info btn-sm">Voir</button></p>
           </div>
          </div>
          <div class="col-md-4">
            <div class="jumbotron">
            <h4>Objet</h4>
          <p>Description</p>
            <p><button href="pageDetails.php" class="btn btn-info btn-sm">Voir</button></p>
            </div>
          </div>
          <div class="col-md-4">
           <div class="jumbotron">
            <h4>Objet</h4>
          <p>Description</p>
            <p><button href="pageDetails.php" class="btn btn-info btn-sm">Voir</button></p>
           </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
           <div class="jumbotron">
            <h4>Objet</h4>
          <p>Description</p>
            <p><button href="pageDetails.php" class="btn btn-info btn-sm">Voir</button></p>
           </div>
          </div>
          <div class="col-md-4">
            <div class="jumbotron">
            <h4>Objet</h4>
          <p>Description</p>
            <p><button href="pageDetails.php" class="btn btn-info btn-sm">Voir</button></p>
            </div>
          </div>
          <div class="col-md-4">
           <div class="jumbotron">
            <h4>Objet</h4>
          <p>Description</p>
            <p><button href="pageDetails.php" class="btn btn-info btn-sm">Voir</button></p>
           </div>
          </div>
        </div>

</body>
</html>