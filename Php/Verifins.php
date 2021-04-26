<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
session_start();
require("../bdd/bdd.php"); 
$log=htmlspecialchars($_POST['log']);
$mdp=htmlspecialchars($_POST['pw']);
    $sql= 'INSERT INTO Login(ID,PW,ST) VALUES("'.$log.'","'.$mdp.'", "SU")';
    $connexion->exec($sql);
    $_SESSION["starf"]='ok';
    header('Location: ../connexion.php');  
?>
</html>