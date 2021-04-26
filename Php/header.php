<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<header>
        <img src="img/mery.jpeg" alt="Logo One Piece" height="200" width="200" class="merry">
        <h1>LeBonMerry </h1>
        <nav>
            <ul id="nav">
                <li><a href="index.php?">Accueil</a></li>
                <li><a href="produit.php?cate=manga">Tomes de One piece</a></li>
                <li class="dropdown"><a href="figurine.php" class="dropbtn">Figurines de One piece</a>
                    <div class="dropdown-content">
                        <a href="produit.php?cate=mugiwara">Figurines des Mugiwaras</a>
                        <a href="produit.php?cate=pirate">Figurines des Pirates</a>
                        <a href="produit.php?cate=marine">Figurines de la Marine</a>
                        <a href="produit.php?cate=all">Toutes les figurines</a>
                    </div>
                    </li>
                <?php
                if ($_SESSION['eta']=="log") {
                    echo('<li><a href="Php/deconnexion.php">Deconnexion</a></li>');
                } else {
                    echo('<li><a href="connexion.php">Connexion</a></li>');
                }
                ?>
                <li><a href="contact.php">Contact</a></li> 
                <li><a href="panier.php">Panier</a></li> 
                <?php
                if ($_SESSION['status']=="admin") {
                    echo"<li><a>ADMIN</a></li> ";
                 }
                ?>
            </ul>
        </nav>
    </header>
</html>