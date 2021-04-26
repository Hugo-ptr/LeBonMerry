<?php
session_start();
require("../bdd/bdd.php");
array_push( $_SESSION['panier']['libelleProduit'],$_POST['name']);
array_push( $_SESSION['panier']['qteProduit'],$_POST['qte']);
array_push( $_SESSION['panier']['prixProduit'],$_POST['prix']);
array_push( $_SESSION['panier']['imgProduit'],$_POST['img']);
array_push( $_SESSION['panier']['qte'],$_POST['qte']);
$qtemax =$connexion->query('SELECT QTE FROM Produit WHERE NOM like "'.$_POST['name'].'"');
$qtemax =$qtemax - $_POST['qte'];
$sql='UPDATE Produit SET QTE=QTE-"'.$_POST['qte'].'" WHERE NOM LIKE "'.$_POST['name'].'"';
$connexion->exec($sql);
header("Location:".$_SERVER['HTTP_REFERER']);
?>