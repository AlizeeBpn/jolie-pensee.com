<?php

require("config/commandes.php");

$mesProduits=afficher();

?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://css.gg/css' rel='stylesheet'>
  <link rel="stylesheet" href="styleshop.css">
  <title>Soin visage naturel biologique - Jolie Pensée</title>
  <meta name="Description" content="Produits naturels, biologiques et phytoactifs pour la peau : Optez pour la gamme de soins à la fleur de pensée conçue par Jolie Pensée.">
  <script src="https://kit.fontawesome.com/49f2114895.js" crossorigin="anonymous"></script>
</head>

<body>

  <section id="header">
    <a href="index.php"><img src="img/logo_2.svg" alt="logo" class="logo"></a>

    <div>
      <ul id="navbar">
        <li><a href="index.php">Acueil</a></li>
        <li><a class="active" href="shop.php">Catalogue</a></li>
        <li><a href="about.php">À propos</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li id="lg-bag"><a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
        <li id="lg-bag"><a href="user.php"><i class="fa-solid fa-user"></i></a></li>
        <a href="#" id="close"><i class="gg-close"></i></a>
      </ul>
    </div>

    <div id="mobile">
      <a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a>
      <a href="user.php"><i class="fa-solid fa-user"></i></a>
      <i id="bar" class="fa-solid fa-bars"></i>
    </div>
  </section>

  <section id="page_header">
    <h2>Sublimez votre peau</h2>
    <P>Profitez d'un code promo sur votre première commandes avec le code <span class="newfleur">NEWFRLEUR</SPAN></P>
  </section>

  <section id="product1" class="section-p1">
    <div class="pro-container">

  <?php foreach($mesProduits as $produits): ?>
      <div class="pro" onclick="window.location.href='singproduct.php?id=<?= $produits-> id?>';">
        <img src="<?= $produits-> img ?>" alt="produit jolie pensée">
        <div class="des">
          <span><?= $produits-> gamme?></span>
        <h5><?= $produits-> nom?></h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4><?= $produits-> prix ?>€</h4>
        </div>
        <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
      </div>
<?php endforeach; ?>

    </div>
  </section>

  <section id="pagination" class="section-p1">
    <a href="#">1</a>
    <a href="#">2</a>
    <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
  </section>


  <section id="newsletter" class="section-m1 section-p1">
    <div class="newstext">
      <h4>Inscrivez-vous à notre newsletter</h4>
      <p>Pour ne pas ratez nos dernières nouveautés et <span>offres spéciales.</span></p>
    </div>
    <div class="form">
      <input type="text" placeholder="Votre email">
      <button class="normal">S'inscrire</button>
    </div>
  </section>

  <footer class="section-p1">
    <div class="col">
      <img src="img/logo_2.svg" alt="logo" class="logofooter">
      <h4>Contact</h4>
      <p><strong>Adress:</strong> 13 rue de la claire, 13100 Aix-en-Provence</p>
      <p><strong>Télephone:</strong> +33 02 52 45 52 45</p>
      <p><strong>Heures d'ouverture:</strong> 09:30 - 20:30, Lundi - Samedi</p>
      <div class="follow">
        <h4>Nous suivre</h4>
        <div class="icon">
          <i class="fab fa-instagram"></i>
          <i class="fab fa-facebook-f"></i>
            <i class="fa-brands fa-youtube"></i>
          <i class="fab fa-linkedin"></i>
        </div>
      </div>
    </div>

    <div class="col">
      <h4>À propos</h4>
      <a href="about.php">À propos de nous</a>
      <a href="#">Information de livraison</a>
      <a href="#">Mentions légales</a>
      <a href="#">Protection des données</a>
      <a href="#">CGV</a>
      <a href="contact.php">Nous contacter</a>
    </div>

    <div class="col">
      <h4>Mon compte</h4>
      <a href="#">Se connecter</a>
      <a href="#">Voir le panier</a>
      <a href="#">Mes favoris</a>
      <a href="#">Suivre mon colis</a>
      <a href="#">Aide</a>
    </div>

    <div class="col">
      <h4>Moyens de paiement</h4>
      <p>Plateforme de paiement sécurisée</p>
      <img src="img/pay/pay.png" alt="payment">
    </div>
    <div class="copyright">
      <p>@2022, Alizée Bompan - php CSS Ecommerce Jolie Pensée</p>
    </div>
  </footer>

  <script src="script.js"></script>
</body>

</php>
