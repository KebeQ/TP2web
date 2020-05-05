<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modification du client</title>
</head>
<body>
<?php
require_once 'includes/connexion.php';
require_once 'tables/clientDAO.class.php';
require_once 'includes/formulaireClient.php';
?>

<div class="jumbotron">
   <form method="POST">
        <div class="form-row">
            <div class="col-md-4">
            <label for="nomClient">Nom: </label>
            <input type="text" name="nomClient" id="nomClient"
            value=<?php echo $_SESSION['nomClient'] ?>> 
            </div>
            <div class="col-md-4">
            <label for="prenomClient">Prénom: </label>
            <input type="text" name="prenomClient" id="prenomClient"
            value=<?php echo $_SESSION['prenomClient'] ?>> 
            </div>
            <div class="col-md-4">
            <label for="adresseClientModification">Adresse: </label>
            <input type="text" name="adresseClientModification" id="adresseClientModification"
            value=<?php echo $_SESSION['adresseClient'] ?>>
            </div>
        </div>

        <br />
        <div class="form-row">
            <div class="col-md-4">
            <label for="villeClientModification">Ville: </label>
            <input type="text" name="villeClientModification" id="villeClientModification"
            value=<?php echo $_SESSION['villeClient'] ?>> 
            </div>
            <div class="col-md-4">
            <label for="provinceClientModification">Province: </label>
            <input type="text" name="provinceClientModification" id="provinceClientModification"
            value=<?php echo $_SESSION['provinceClient'] ?>> 
            </div>
            <div class="col-md-4">
            <label for="codePostalModification">Code Postal: </label>
            <input type="text" name="codePostalModification" id="codePostalModification"
            value=<?php echo $_SESSION['codePostal'] ?>> 
            </div>
        </div>
        
        <br />
        <div class="form-row">
         <div class="col-md-4">
            <label for="loginModification">Login: </label>
            <input type="text" name="loginModification" id="loginModification"
            value=<?php echo $_SESSION['login'] ?>> 
         </div>
        <div class="form-row">
         <div class="col-md-4">
            <label for="motDePasseModification">Mot de Passe: </label>
            <input type="password" name="motDePasseModification" id="motDePasseModification"
            value=<?php echo $_SESSION['motDePasse'] ?>> 
         </div>
         <div class="col-md-4">
            <label for="motDePasseConfirmModification">Confirmer mot de Passe: </label>
            <input type="password" name="motDePasseConfirmModification" id="motDePasseConfirmModification"
            value=<?php echo $_SESSION['motDePasse'] ?>> 
         </div>
        <div class="col-md-4">
            <label for="emailClientModification">Email: </label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
              </div>
              <input type="email" id="emailClientModification" name="emailClientModification" aria-describedby="inputGroupPrepend"
              value=<?php echo $_SESSION['emailClient'] ?>>
            </div>
           </div>
          </div>
		  <br />
		  <input type="submit" name="updateClient" value="Approuvé les modifications">
    </form>
</div>

</body>

<?php 
     $management = new ClientDAO($conn);

     $client = new Client($_SESSION['nomClient'], 
     $_SESSION['prenomClient'], $_SESSION['adresseClient'], $_SESSION['villeClient'], $_SESSION['provinceClient'], 
     $_SESSION['codePostal'], $_SESSION['login'], $_SESSION['motDePasse'], $_SESSION['emailClient']);

     $management->update($client);
?>

</html>
