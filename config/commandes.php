<?php

function ajouter($img, $nom, $gamme, $prix, $description)
{
if(require("connexion.php"))
{
  $req = $access->prepare("INSERT INTO produits (img, nom, gamme, prix, description) VALUES ($img, $nom, $gamme, $prix, $description)");

  $req->execute(array($img, $nom, $gamme, $prix, $description));

  $req->closeCursor();
}
}

function afficher()
{
  if(require("connexion.php"))
  {
    $req=$access->prepare("SELECT * FROM produits");

      $req->execute();

      $data = $req->fetchAll(PDO::FETCH_OBJ);

      return $data;

      $req->closeCursor();

  }
}


function display()
{
  if(require("connexion.php"))
  {

     $req=$access->prepare('SELECT * FROM produits WHERE id=\'' . $_GET['id'] . '\'');

     $req->execute();

     $data = $req->fetchAll(PDO::FETCH_OBJ);

     return $data;

      $req->closeCursor();

  }
}

function supprimer($id)
{
  if(require("connexion.php"))

  {
    $req=$access->prepare("DELETE FROM produits WHERE id=?");

    $req->execute(array($id));
  }
}

?>
