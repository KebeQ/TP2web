<?php 
session_start();
$_SESSION['adresseClient'] = $_POST['adresseClient'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Facture</title>
<?php
require_once 'classes/commande.class.php'; 
require_once 'items_commande.class.php';
?>
</head>
<body>
<h1 class="text-center">Facture</h1>
    <fieldset>
    <div class="row">
          <div class="col-md-4">
           <?php
           echo $_SESSION['adresseClient'];
           ?>
          </div>
          </div>

          <div class="row">
          <div class="col-md-12">
          <?php
          $management = new CommandeDAO($conn);
          
          if (isset($_SESSION['noProduit']) && isset($_SESSION['qte'])){
            array_push($produits, $noProduit);
            array_push($enStock, $qte);
            }
          ?>
          </div>
          </div>

          <div class="row">
          <div class="col-md-12">
    <label for="modePaiement">Mode de Paiement : </label>
            <select class="form-control" id="modePaiement" name="modePaiement" required>
              <option selected disabled value="default">---</option>
              <option>Visa</option>
              <option>Paypal</option>
              <option>Mastercard</option>
              <option>Maestro</option>
            </select>
            </div>
            </div>
</body>

</html>
