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
    require("Php/header.php");
    ?>
    <div class="contouring">
        <p>Figurines des mugiwaras</p>
        <a href="produit.php?cate=mugiwara"><img src="img/drapeauMugi.jpg" alt="boutique figurine mugiwara"/></a>
    </div>

    <div class="contouring">
        <p>Figurines des pirates</p>
        <a href="produit.php?cate=pirate"><img src="img/drapeauPirate.jpg" alt="boutique figurine pirates"/></a>
    </div>

    <div class="contouring">
        <p>Figurines de la marine</p>
        <a href="produit.php?cate=marine"><img src="img/drapeauMarine.png" alt="boutique figurine marines"/></a>
    </div>
    <?php
    require("Php/footer.php");
    ?>
</body>
</html>