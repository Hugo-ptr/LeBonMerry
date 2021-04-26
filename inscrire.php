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
require("Php/header.php");
?>
<form class="ok"action="Php/Verifins.php" method="post">
<div>
    <label for="name">Un login</label>
    <input type="text" id="name" name="log">
</div>
<div>
    <label for="pas">Un mdp</label>
    <input type="password" id="pw" name="pw">
</div>
<div class="button">
    <button type="submit">S'inscrire</button>
</div>
</form>
<?php
require("Php/footer.php");
?>
    
</body>