<?php
session_start();

?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>The Elder Scrolls</title>
    </head>

    <body>

    <h1><CENTER> Fiche de <?php echo $_SESSION['Nom']; ?></CENTER> </h1>


    <?php

    $Sante=50;
    $Vigueur=5;
    $Magie=10;

  if($_SESSION['Specialite'] == "Guerrier")
  {
    $CompGuerrier = array (
    'Forgeage' => 35,
    'Armure lourde' => 35,
    'Blocage' => 35,
    'Deux mains' => 35,
    'Une main' => 35,
    'Archerie' => 35);

    $CompMage = array (
    'Illusion' => 25,
    'Conjuration' => 25,
    'Destruction' => 25,
    'Guerison' => 25,
    'Alteration' => 25,
    'Enchantement' => 25);

    $CompVoleur = array (
    'Armure legere' => 25,
    'Furtivite' => 25,
    'Crochetage' => 25,
    'Vol' => 25,
    'Eloquence' => 25,
    'Alchimie' => 25);
  }

  else if($_SESSION['Specialite'] == "Voleur")
  {
    $CompGuerrier = array (
    'Forgeage' => 25,
    'Armure lourde' => 25,
    'Blocage' => 25,
    'Deux mains' => 25,
    'Une main' => 25,
    'Archerie' => 25);

    $CompMage = array (
    'Illusion' => 25,
    'Conjuration' => 25,
    'Destruction' => 25,
    'Guerison' => 25,
    'Alteration' => 25,
    'Enchantement' => 25);

    $CompVoleur = array (
    'Armure legere' => 35,
    'Furtivité' => 35,
    'Crochetage' => 35,
    'Vol' => 35,
    'Eloquence' => 35,
    'Alchimie' => 35);
  }

  else if($_SESSION['Specialite'] == "Mage")
  {
    $CompGuerrier = array (
    'Forgeage' => 25,
    'Armure lourde' => 25,
    'Blocage' => 25,
    'Deux mains' => 25,
    'Une main' => 25,
    'Archerie' => 25);

    $CompMage = array (
    'Illusion' => 35,
    'Conjuration' => 35,
    'Destruction' => 35,
    'Guerison' => 35,
    'Alteration' => 35,
    'Enchantement' => 35);

    $CompVoleur = array (
    'Armure legere' => 25,
    'Furtivite' => 25,
    'Crochetage' => 25,
    'Vol' => 25,
    'Eloquence' => 25,
    'Alchimie' => 25);
  }

    if($_SESSION['Race'] == "Argonien")
    {
      $CompVoleur['Crochetage'] = $CompVoleur['Crochetage'] + 12;

      $CompVoleur['Armure legere'] = $CompVoleur['Armure legere'] + 8;
      $CompVoleur['Furtivite'] = $CompVoleur['Furtivite'] + 8;
      $CompVoleur['Vol'] = $CompVoleur['Vol'] + 8;
      $CompMage['Alteration'] = $CompMage['Alteration'] + 8;
      $CompMage['Guerison'] = $CompMage['Guerison'] + 8;
    }

    else if($_SESSION['Race'] == "Breton")
    {
      $CompMage['Conjuration'] = $CompMage['Conjuration'] + 12;

      $CompVoleur['Eloquence'] = $CompVoleur['Eloquence'] + 8;
      $CompVoleur['Alchimie'] = $CompVoleur['Alchimie'] + 8;
      $CompMage['Illusion'] = $CompMage['Illusion'] + 8;
      $CompMage['Alteration'] = $CompMage['Alteration'] + 8;
      $CompMage['Guerison'] = $CompMage['Guerison'] + 8;
    }

    else if($_SESSION['Race'] == "Elfe_noir")
    {
      $CompMage['Destruction'] = $CompMage['Destruction'] + 12;

      $CompVoleur['Armure legere'] = $CompVoleur['Armure legere'] + 8;
      $CompVoleur['Furtivite'] = $CompVoleur['Furtivite'] + 8;
      $CompVoleur['Alchimie'] = $CompVoleur['Alchimie'] + 8;
      $CompMage['Alteration'] = $CompMage['Alteration'] + 8;
      $CompMage['Illusion'] = $CompMage['Illusion'] + 8;
    }

    if($_SESSION['Race'] == "Haut_elfe")
    {
      $CompMage['Illusion'] = $CompMage['Illusion'] + 12;

      $CompMage['Conjuration'] = $CompMage['Conjuration'] + 8;
      $CompMage['Destruction'] = $CompMage['Destruction'] + 8;
      $CompMage['Enchantement'] = $CompMage['Enchantement'] + 8;
      $CompMage['Alteration'] = $CompMage['Alteration'] + 8;
      $CompMage['Guerison'] = $CompMage['Guerison'] + 8;
    }

    else if($_SESSION['Race'] == "Elfe_des_bois")
    {
      $CompGuerrier['Archerie'] = $CompGuerrier['Archerie'] + 12;

      $CompVoleur['Armure legere'] = $CompVoleur['Armure legere'] + 8;
      $CompVoleur['Furtivite'] = $CompVoleur['Furtivite'] + 8;
      $CompVoleur['Vol'] = $CompVoleur['Vol'] + 8;
      $CompVoleur['Crochetage'] = $CompVoleur['Crochetage'] + 8;
      $CompVoleur['Alchimie'] = $CompVoleur['Alchimie'] + 8;
    }

    else if($_SESSION['Race'] == "Imperial")
    {
      $CompMage['Guerison'] = $CompMage['Guerison'] + 12;

      $CompGuerrier['Une main'] = $CompGuerrier['Une main'] + 8;
      $CompGuerrier['Armure lourde'] = $CompGuerrier['Armure lourde'] + 8;
      $CompGuerrier['Blocage'] = $CompGuerrier['Blocage'] + 8;
      $CompMage['Destruction'] = $CompMage['Destruction'] + 8;
      $CompMage['Enchantement'] = $CompMage['Enchantement'] + 8;
    }

    else if($_SESSION['Race'] == "Khajit")
    {
      $CompVoleur['Furtivite'] = $CompVoleur['Furtivite'] + 12;

      $CompGuerrier['Une main'] = $CompGuerrier['Une main'] + 8;
      $CompGuerrier['Archerie'] = $CompGuerrier['Archerie'] + 8;
      $CompVoleur['Crochetage'] = $CompVoleur['Crochetage'] + 8;
      $CompVoleur['Vol'] = $CompVoleur['Vol'] + 8;
      $CompVoleur['Alchimie'] = $CompVoleur['Alchimie'] + 8;
    }

    if($_SESSION['Race'] == "Nordique")
    {
      $CompGuerrier['Deux mains'] = $CompGuerrier['Deux mains'] + 12;

      $CompGuerrier['Forgeage'] = $CompGuerrier['Forgeage'] + 8;
      $CompGuerrier['Blocage'] = $CompGuerrier['Blocage'] + 8;
      $CompGuerrier['Une main'] = $CompGuerrier['Une main'] + 8;
      $CompVoleur['Armure legere'] = $CompVoleur['Armure legere'] + 8;
      $CompVoleur['Eloquence'] = $CompVoleur['Eloquence'] + 8;
    }

    else if($_SESSION['Race'] == "Orc")
    {
      $CompGuerrier['Armure lourde'] = $CompGuerrier['Armure lourde'] + 12;

      $CompGuerrier['Forgeage'] = $CompGuerrier['Forgeage'] + 8;
      $CompGuerrier['Deux mains'] = $CompGuerrier['Deux mains'] + 8;
      $CompGuerrier['Blocage'] = $CompGuerrier['Blocage'] + 8;
      $CompGuerrier['Une main'] = $CompGuerrier['Une main'] + 8;
      $CompMage['Enchantement'] = $CompMage['Enchantement'] + 8;
    }

    else if($_SESSION['Race'] == "Rougegarde")
    {
      $CompGuerrier['Une main'] = $CompGuerrier['Une main'] + 12;

      $CompGuerrier['Forgeage'] = $CompGuerrier['Forgeage'] + 8;
      $CompGuerrier['Archerie'] = $CompGuerrier['Archerie'] + 8;
      $CompGuerrier['Blocage'] = $CompGuerrier['Blocage'] + 8;
      $CompMage['Alteration'] = $CompMage['Alteration'] + 8;
      $CompMage['Destruction'] = $CompMage['Destruction'] + 8;
    }



    ?>

<CENTER><table border="1" cellpading="15" width="30%">

  <tr>

      <td align="center" width="15%" bgcolor="#B92828"> <p> <FONT size="10p"> <b>Vie</b> </FONT> </p>  </td>
      <td align="center" width="15%" bgcolor="#0A6F3B"> <p> <FONT size="10p"> <b>Vigueur</b> </FONT> </p>  </td>
      <td align="center" width="15%" bgcolor="#16207F"> <p> <FONT size="10p"> <b>Magie</b> </FONT> </p>  </td>

  </tr><CENTER>

  <tr>

      <td align="center" bgcolor="#E54646"> <p> <FONT size="14p"> <?php echo $Sante ?> </FONT> </p>  </td>
      <td align="center" bgcolor="#2BAD6A"> <p> <FONT size="14p"><?php echo $Vigueur ?> </FONT>  </p>  </td>
      <td align="center" bgcolor="#394193"> <p> <FONT size="14p"> <?php echo $Magie ?> </FONT>  </p>  </td>

  </tr>

</table>

<br />
<br />
<br />

<CENTER><table border="1" cellspading="10" cellspacing="1" width="50%">

  <tr>

      <td align="center" colspan="2" width="25%"> <p> <b>Competences Guerrier</b>  </p>  </td>
      <td align="center" colspan="2" width="25%"> <p> <b>Competences Voleur</b>  </p>  </td>
      <td align="center" colspan="2" width="25%"> <p> <b>Competences Mage</b>  </p>  </td>

  </tr>

  <tr>

      <td align="left"> <p> <b>Forgeage</b>  </p>  </td>
      <td align="center"> <p> <?php echo $CompGuerrier['Forgeage'] ?>  </p>  </td>
      <td align="left"> <p> <b>Armure legere</b>  </p>  </td>
      <td align="center"> <p> <?php echo $CompVoleur['Armure legere'] ?>  </p>  </td>
      <td align="left"> <p> <b>Illusion</b>  </p>  </td>
      <td align="center"> <p> <?php echo $CompMage['Illusion'] ?>  </p>  </td>

  </tr>

  <tr>

      <td align="left"> <p> <b>Armure lourde</b>  </p>  </td>
      <td align="center"> <p> <?php echo $CompGuerrier['Armure lourde'] ?>  </p>  </td>
      <td align="left"> <p> <b>Furtivite</b>  </p>  </td>
      <td align="center"> <p> <?php echo $CompVoleur['Furtivite'] ?>  </p>  </td>
      <td align="left"> <p> <b>Conjuration</b>  </p>  </td>
      <td align="center"> <p> <?php echo $CompMage['Conjuration'] ?>  </p>  </td>

  </tr>

  <tr>

      <td align="left"> <p> <b>Blocage</b>  </p>  </td>
      <td align="center"> <p> <?php echo $CompGuerrier['Blocage'] ?>  </p>  </td>
      <td align="left"> <p> <b>Crochetage</b>  </p>  </td>
      <td align="center"> <p> <?php echo $CompVoleur['Crochetage'] ?>  </p>  </td>
      <td align="left"> <p> <b>Destruction</b>  </p>  </td>
      <td align="center"> <p> <?php echo $CompMage['Destruction'] ?>  </p>  </td>

  </tr>

  <tr>

      <td align="left"> <p> <b>Deux mains</b>  </p>  </td>
      <td align="center"> <p> <?php echo $CompGuerrier['Deux mains'] ?>  </p>  </td>
      <td align="left"> <p> <b>Vol</b>  </p>  </td>
      <td align="center"> <p> <?php echo $CompVoleur['Vol'] ?>  </p>  </td>
      <td align="left"> <p> <b>Guerison</b>  </p>  </td>
      <td align="center"> <p> <?php echo $CompMage['Guerison'] ?>  </p>  </td>

  </tr>

  <tr>

      <td align="left"> <p> <b>Une main</b>  </p>  </td>
      <td align="center"> <p> <?php echo $CompGuerrier['Une main'] ?>  </p>  </td>
      <td align="left"> <p> <b>Eloquence</b>  </p>  </td>
      <td align="center"> <p> <?php echo $CompVoleur['Eloquence'] ?>  </p>  </td>
      <td align="left"> <p> <b>Alteration</b>  </p>  </td>
      <td align="center"> <p> <?php echo $CompMage['Alteration'] ?>  </p>  </td>

  </tr>

  <tr>

      <td align="left"> <p> <b>Archerie</b>  </p>  </td>
      <td align="center"> <p> <?php echo $CompGuerrier['Archerie'] ?>  </p>  </td>
      <td align="left"> <p> <b>Alchimie</b>  </p>  </td>
      <td align="center"> <p> <?php echo $CompVoleur['Alchimie'] ?>  </p>  </td>
      <td align="left"> <p> <b>Enchantement</b>  </p>  </td>
      <td align="center"> <p> <?php echo $CompMage['Enchantement'] ?>  </p>  </td>

  </tr>



</table></CENTER>







    <footer>

    <p>  <a href="index.php"> Retour</a></p>

    </footer>

    </body>


</html>
