<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Css/merry.css" />
    <title>Le bon Merry</title>
</head>
<body>
<?php 
session_start();
require("Php/header.php");
$prix=0;
if (count($_SESSION['panier']['libelleProduit'])==0) {
    echo"<h2 class='center'>Votre panier est vide</h2>";
}else {
    echo("<h2 class='center'>Votre panier contient </h2>");
for ($i=0; $i < sizeof($_SESSION['panier']['prixProduit']); $i++) { 
    echo("<div class='panier'>");
    $prix = $prix + $_SESSION['panier']['prixProduit'][$i]*$_SESSION['panier']['qte'][$i];
    echo("<p>".$_SESSION['panier']['libelleProduit'][$i]." à ".$_SESSION['panier']['prixProduit'][$i]." € </p>");
    echo("<p>Quantité :".$_SESSION['panier']['qte'][$i]."</p>");
    echo("<img src='".$_SESSION['panier']['imgProduit'][$i]."' class='igpani'>");
    echo"<div>";
    echo"<form action='Php/suppanier.php' method='post'>";
    echo"<input type='text' value='".$_SESSION['panier']['libelleProduit'][$i]."' name='name' hidden>";
    echo"<input class='retir' type='submit' value='Retirer du panier'>";
    echo"</form>";
    echo"</div>";
    echo("</div>");
    echo ("<hr>");
    
}
echo ("<p class='center'>Le montant de votre panier est de <B>". $prix." €</B></p>");
}

require("Php/footer.php");
?>
</body>
</html>