<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Css/merry.css" />
    <script src='Js/script.js'></script>
    <title>Le bon Merry</title>
</head>
<body>
<?php
  session_start();
  require("Php/header.php");
  ?>
    <input class="stockb" type="button" value="Afficher le stock" onclick="Afficher()">
    <?php
    require("bdd/bdd.php");
    if ($_GET['cate']=="all") {
      $sql='SELECT * from Produit WHERE CATEGORIE NOT LIKE "manga"';
    } else {
      $sql='SELECT * from Produit WHERE CATEGORIE LIKE "'.$_GET['cate'].'"';
    }
   foreach ($connexion->query($sql) as $row){
    echo"<section class='produit'>";
    echo"<div class='contouring'>";
    echo"<div class='illustration'>";
    if ($_GET['cate']=='manga') {
      echo"<img src='".$row['IMG']."' height='500' width='300'id='imgZoom'onmousemove='zoomIn(event)' onmouseout='zoomOut()'>";
    }else {
      echo"<img src='".$row['IMG']."' height='300' width='300'id='imgZoom'onmousemove='zoomIn(event)' onmouseout='zoomOut()'>";
    }
        echo" </div>";
      echo" <div class='description'>";
      echo"<h3>".$row['DESCRIP']."</h3>";
        echo"<h4>".$row['PRIX']." €</h4>";
        echo" </div>";
      echo" <div class='stock' style='display: none;'>";
      echo"<form action='Php/ajoutpanier.php' method='post'>";
      if ($_SESSION['status']=="admin") {
        echo"<p id ='stockv'>".$row['QTE']."</p>";
    }else {
        echo"<p id ='stockv' hidden>".$row['QTE']."</p>";
    }
        echo"<input type='button' value='-' onclick='decrem(this)'>";
        echo" <input id='val'type='text' value='1' min='1' max='".$row['QTE']."' name='qte'>";
        echo"<input type='button' value='+' onclick='increm(this)'>";
        echo"</div>";
        
            echo"<input type='submit' value='Ajouter au panier' >";
            echo"<input type='text' value='".$row['PRIX']."'7.99' name='prix' hidden>";
            echo"<input type='text' value='".$row['NOM']."' name='name' hidden>";
            echo"<input type='text' value='".$row['IMG']."' name='img' hidden>";
            echo"</form>";
      
    echo"</div>";
    echo"</section>";
    
}
    require("Php/footer.php");
    ?>
</body>
</html>