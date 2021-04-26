<?php
session_start();
$panier_temporaire = array();
$panier_temporaire['libelleProduit'] = array();
$panier_temporaire['prixProduit'] = array();
$panier_temporaire['qteProduit'] = array();
$panier_temporaire['imgProduit'] = array();
$panier_temporaire['qte'] = array();
for($i = 0; $i < count($_SESSION['panier']['libelleProduit']); $i++)
{
   if ($_SESSION['panier']['libelleProduit'][$i] !== $_POST['name'])
   {
    array_push ($panier_temporaire['libelleProduit'], $_SESSION['panier']['libelleProduit'][$i]);
    array_push ($panier_temporaire['prixProduit'], $_SESSION['panier']['prixProduit'][$i]);
    array_push ($panier_temporaire['qteProduit'], $_SESSION['panier']['qteProduit'][$i]);
    array_push ($panier_temporaire['imgProduit'], $_SESSION['panier']['imgProduit'][$i]);
    array_push ($panier_temporaire['qte'], $_SESSION['panier']['qte'][$i]);
   }
}
$_SESSION['panier'] = $panier_temporaire;
unset($panier_temporaire);
header('Location: ../panier.php');
?>