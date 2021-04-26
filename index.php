<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Css/merry.css" />
    <title>Le bon Merry</title>
</head>
<body>
    <?php
    session_start();
   include("Php/header.php");
   if (!(isset( $_SESSION['index']))) {
    include("Php/varSession.inc.php");
   }
   $_SESSION['index']=0;
   ?>
    <section>
        
        <div class="panier">
        <h1>Bienvenue sur le Bon Merry</h1>
        Un site où vous pourrez acheter des produits sur le thème de One piece.
        <h1>Qu'est-ce que'est One Piece ?</h1>
        One piece est un manga de Eiichiro Oda paru pour la première fois en 1997. C'est l'histoire d'un jeune homme, Monkey D Luffy, devenu entièrement élastique après avoir mangé le fruit de l'arbre Gum Gum. Vous pourrez suivre ses aventure dans toutes les mers du monde avec ses amis. Sur notre site, vous pouvez achetez les tomes. Vous pouvez aussi achetez des figurines de vos personnages préférés.
        <h1> A très vite sur les routes de Grand line.</h1>
        </div>
        <img  class="imgpp" src="img/mugi.png" alt="mugiwara">
        <?php
    include("Php/footer.php");
    ?>
</body>
</html>