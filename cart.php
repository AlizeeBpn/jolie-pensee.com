<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://css.gg/css' rel='stylesheet'>
  <link rel="stylesheet" href="style.css">
  <title>Soin visage naturel biologique - Jolie Pensée</title>
  <meta name="description" content="Marque naturelle, biologique et phytoactif pour la peau : Optez pour la gamme de soins à la fleur de pensée conçue par Jolie Pensée.">
  <script src="https://kit.fontawesome.com/49f2114895.js" crossorigin="anonymous"></script>
</head>

<body>

  <section id="header">
    <a href="index.php"><img src="img/logo_2.svg" alt="logo" class="logo"></a>

    <div>
      <ul id="navbar">
        <li><a href="index.php">Accueil</a></li>
        <li><a href="shop.php">Catalogue</a></li>
        <li><a href="about.php">À propos</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li id="lg-bag"><a class="active" href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
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

  <section id="page_header" class="about-header">
    <h2>Recevez rapidement vos produits !</h2>
    <P>Expéditions des colis sous 24 heures.</P>
  </section>

  <section id="cart" class="section-p1">
    <table width="100%">
      <thead>
        <tr>
          <td>Enlever</td>
          <td>Image</td>
          <td>Produit</td>
          <td>Prix</td>
          <td>Quantité</td>
          <td>Total</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><a href="#"><i class="fa-sharp fa-solid fa-xmark"></i></a></td>
          <td><img src="img/products/f1.jpg" alt="produit jolie pensée"></td>
          <td>Name product</td>
          <td>25$</td>
          <td><input type="number" value="1"></td>
          <td>25$</td>
        </tr>
        <tr>
          <td><a href="#"><i class="fa-sharp fa-solid fa-xmark"></i></a></td>
          <td><img src="img/products/f2.jpg" alt="produit jolie pensée"></td>
          <td>Name product</td>
          <td>25$</td>
          <td><input type="number" value="1"></td>
          <td>25$</td>
        </tr>
        <tr>
          <td><a href="#"><i class="fa-sharp fa-solid fa-xmark"></i></a></td>
          <td><img src="img/products/f3.jpg" alt="produit jolie pensée"></td>
          <td>Name product</td>
          <td>25$</td>
          <td><input type="number" value="1"></td>
          <td>25$</td>
        </tr>
      </tbody>
    </table>
  </section>

<section id="cart-add" class="section-p1">
  <div id="coupon">
    <h3>Appliquer un coupon</h3>
    <div>
      <input type="text" placeholder="Entrez votre coupon">
      <button class="normal">Appliquer</button>
    </div>
  </div>
  <div id="subtotal" class="">
    <h3>Total du panier</h3>
    <table>
      <tr>
        <td>Total des produits</td>
        <td>335$</td>
      </tr>
      <tr>
        <td>Expédition</td>
        <td>Gratuit</td>
      </tr>
      <tr>
        <td><strong>Total</strong></td>
        <td><strong>335$</strong></td>
      </tr>
    </table>
    <button class="normal">Procéder a la vérification</button>
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

  <script src="script.js"></script>
</body>

</php>
