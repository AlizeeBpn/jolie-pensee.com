<?php


require("config/commandes.php");

$mesProduits=display();

?>


<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://css.gg/css' rel='stylesheet'>
  <link rel="stylesheet" href="style.css">
  <title>Soin visage naturel biologique - Jolie Pensée</title>
  <meta name="description" content="Produits naturels, biologiques et phytoactifs pour la peau : Optez pour la gamme de soins à la fleur de pensée conçue par Jolie Pensée.">
  <script src="https://kit.fontawesome.com/49f2114895.js" crossorigin="anonymous"></script>
</head>

<body>

  <section id="header">
    <a href="index.php"><img src="img/logo_2.svg" alt="logo" class="logo"></a>

    <div>
      <ul id="navbar">
        <li><a href="index.php">Accueil</a></li>
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

  <?php foreach($mesProduits as $produits ): ?>

  <section id="prodetails" class="section-p1">

    <div class="single-pro-image">
      <img src="<?= $produits-> img ?>" width="100%" id="MainImg" alt="produit jolie pensée">

    <!--  <div class="small-img-group">
        <div class="small-img-col">
          <img src="img/products/f" width="100%" class="small-img" alt="">jpg        </div>
     <div class="small-img-col">
          <img src="img/products/f2.jpg" width="100%" class="small-img" alt="">
        </div>
        <div class="small-img-col">
          <img src="img/products/f3.jpg" width="100%" class="small-img" alt="">
        </div>
        <div class="small-img-col">
          <img src="img/products/f4.jpg" width="100%" class="small-img" alt="">
        </div>
  -->
      </div>
    </div>
   <div class="single-pro-details">
     <h6>Accueil/ Produits</h6>
     <h4><?= $produits-> nom?></h4>
     <h2><?= $produits-> prix?>€</h2>
    <input type="number" value="1">
    <button class="normal"> Ajouter au panier</button>
    <h4>Description du produit</h4>
    <span><?= $produits-> description?></span>
   </div>

  </section>
 <?php endforeach; ?>

  <section id="product1" class="section-p1">
    <h2>Autres produits</h2>
    <p>Une collection de produits doux comme des petals de fleurs</p>
    <div class="pro-container">
      <div class="pro" onclick="window.location.href='singproduct.php?id=1';">
        <img src="img/products/f1.jpg" alt="produit jolie pensée">
        <div class="des">
          <span>Jolie Pensée</span>
          <h5>Crème visage</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>12€</h4>
        </div>
        <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
      </div>
      <div class="pro" onclick="window.location.href='singproduct.php?id=2';">
        <img src="img/products/f2.jpg" alt="produit jolie pensée">
        <div class="des">
          <span>Jolie Pensée</span>
          <h5>Serum belle peau</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>14€</h4>
        </div>
        <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
      </div>
      <div class="pro" onclick="window.location.href='singproduct.php?id=3';">
        <img src="img/products/f3.jpg" alt="produit jolie pensée">
        <div class="des">
          <span>Jolie Pensée</span>
          <h5>Gel douche bio</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>6€</h4>
        </div>
        <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
      </div>
      <div class="pro" onclick="window.location.href='singproduct.php?id=4';">
        <img src="img/products/f4.jpg" alt="produit jolie pensée">
        <div class="des">
          <span>Jolie Pensée</span>
          <h5>Nettoyant purifiant</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>9€</h4>
        </div>
        <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
      </div>
    </div>
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

<script>
  var MainImg = document.getElementById("MainImg");
  var smallimg = document.getElementsByClassName("small-img");

  smallimg[0].onclick = function(){
    MainImg.src = smallimg[0].src;
  }

  smallimg[1].onclick = function(){
    MainImg.src = smallimg[1].src;
  }

  smallimg[2].onclick = function(){
    MainImg.src = smallimg[2].src;
  }

  smallimg[3].onclick = function(){
    MainImg.src = smallimg[3].src;
  }
</script>

  <script src="script.js"></script>
</body>

</php>
