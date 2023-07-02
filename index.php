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
  <link rel="stylesheet" href="style.css?<?php echo time(); ?>">
  <title>Soin visage naturel biologique - Jolie Pensée</title>
  <meta name="description" content="Marque naturelle, biologique et phytoactif pour la peau : Optez pour la gamme de soins à la fleur de pensée conçue par Jolie Pensée.">
  <script src="https://kit.fontawesome.com/49f2114895.js" crossorigin="anonymous"></script>
</head>

<body>

  <section id="header">
    <a href="index.php"><img src="img/logo_2.svg" alt="logo" class="logo"></a>

    <div>
      <ul id="navbar">
        <li><a class="active" href="index.php">Accueil</a></li>
        <li><a href="shop.php">Catalogue</a></li>
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
      </i><i id="bar" class="fa-solid fa-bars"></i>
    </div>
  </section>

  <section id="hero">
    <h4>UNE BEAUTÉ DE RÊVE</h4>
    <h2>Sublimez votre peau</h2>
    <h1>en légèreté</h1>
    <P>Profitez d'un code promo sur votre première commande avec le code <span class="newfleur">NEWFLEUR</SPAN></P>
  <a href="shop.php"><button type="button" name="button">Découvrire la gamme</button></a>
  </section>


  <section id="product1" class="section-p1">
    <h2>Produits phares</h2>
    <p>Une collection de produits doux et apaisants à base de fleur de pensée</p>
    <div class="pro-container">
      <div class="pro" onclick="window.location.href='singproduct.php?id=1';">
        <img src="img/products/f1.jpg" alt="crème visage jolie pensée">
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
        <img src="img/products/f2.jpg" alt="sérum visage jolie pensée">
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
        <img src="img/products/f3.jpg" alt="gel douche jolie pensée">
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
      <div class="pro" onclick="window.location.href='singproduct.php?id=3';">
        <img src="img/products/f4.jpg" alt="nettoyant visage jolie pensée">
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

  <section id="banner" class="section-m1">
    <h4>Renouvelez votre routine beauté</h4>
    <h2>Profitez de <span>10%</span> de réduction dès l'achat de 4 articles différents</h2>
    <a href="shop.php"><button class="normal">Voir tout</button></a>
  </section>
  
  
  <section id="feature" class="section-p1">
    <div class="fe-box">
      <img src="img/feature/f1.jpg" alt="carton 3d" class="fe-img">
      <h6>Livraison gratuite dès 30€ d'achat</h6>
    </div>
    <div class="fe-box">
      <img src="img/feature/f2.jpg" alt="carton parachute 3d" class="fe-img">
      <h6>Expéditions des colis sous 24 heures</h6>
    </div>
    <div class="fe-box">
      <img src="img/feature/f3.jpg" alt="main coeur 3d" class="fe-img">
      <h6>Satisfait ou remboursé</h6>
    </div>
    <div class="fe-box">
      <img src="img/feature/f4.jpg" alt="certification 3d" class="fe-img">
      <h6>Engagement de qualité</h6>
    </div>
    <div class="fe-box">
      <img src="img/feature/f5.jpg" alt="écouteur bulle chat 3d" class="fe-img">
      <h6>Un service client disponible</h6>
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
      <h4>Moyens de paiements</h4>
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
