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
    <section>
    <?php
    if ($_SESSION['eta']=="unlog") {
        echo "<h2 class='center'>Mauvais login ou mot de passe</h2>";
        $_SESSION['eta']="";
    }
    if ($_SESSION['starf']=="ok") {
        echo "<h2 class='center'>Inscription réussi</h2>";
        $_SESSION['starf']="";
    }
    ?>
        <form class="ok"action="Php/VerifCo.php" method="post">
            <div>
                <label for="name">Login :</label>
                <input type="text" id="name" name="log">
            </div>
            <div>
                <label for="pas">Password:</label>
                <input type="password" id="pw" name="pw">
            </div>
            <div class="button">
                <button type="submit">Se connecter</button>
            </div>
        </form>
        <div class="center">Pas de compte ?
        <a href="inscrire.php">Inscrivez-vous</a>
        </div>
    </section>
    <?php
    require("Php/footer.php");
    ?>
</body>
</html>