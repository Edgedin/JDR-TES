<?php
session_start();

$_SESSION['Nom'] = NULL;
$_SESSION['Race'] = NULL;
$_SESSION['Specialite'] =NULL;

?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>The Elder Scrolls</title>
    </head>

    <body>
    <h1> Création de personnage </h1>


<form method="post">

  <table>

    <tr>
        <td>Nom</td>
        <td> <input type="text" name="nom"> </td>

    </tr>

    <tr>
        <td>Race</td>
        <td><select name="Race">
          <option value="En_attente">En attente</option>
          <option value="Argonien">Argonien</option>
          <option value="Breton">Breton</option>
          <option value="Elfe_noir">Elfe Noir</option>
          <option value="Haut_elfe">Haut Elfe</option>
          <option value="Elfe_des_bois">Elfe des bois</option>
          <option value="Khajit">Khajit</option>
          <option value="Nordique">Nordique</option>
          <option value="Orc">Orc</option>
          <option value="Rougegarde">Rougegarde</option>
           </td>
    </tr>

    <tr>
        <td>Spécialité</td>
        <td><select name="Specialite">
          <option value="En_attente">En attente</option>
          <option value="Guerrier">Guerrier</option>
          <option value="Mage">Mage</option>
          <option value="Voleur">Voleur</option>
           </td>


    </tr>

    <tr> <td> <input type="submit" name="Valider"> </td></tr>

      <?php
      $_SESSION['Nom'] = $_POST['nom'];
      $_SESSION['Race'] = $_POST['Race'];
      $_SESSION['Specialite'] = $_POST['Specialite'];

      ?>

  </table>

</form>

  <?php
      if (isset($_SESSION['Nom']) AND $_SESSION['Race'] != "En_attente" AND $_SESSION['Specialite'] != "En_attente"  )
      {

        header('location:fiche.php');
        exit();
      }

      else {

        echo "Veuillez remplir tous les champs";

      }
  ?>

    </body>
</html>
