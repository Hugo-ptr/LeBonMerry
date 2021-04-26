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
    if ($_SESSION['mail'][0]==1) {
        echo("<p class='center'>Votre mail a bien été envoyé</p>");
        unset($_SESSION['mail']);
    }
   ?>
    <section>
        <form  class="ok"action="Php/mail.php"  method="post">
            <div>
                <label for="name">Nom :</label>
                <input type="text" id="name" name="name" 
                value="<?php if(isset($_SESSION['mail'])){ echo($_SESSION['mail'][3]);}?>"required>
            </div>
            <div>
                <label for="mail">E-mail :</label>
                <input type="email" id="mail" name="mail" 
                value="<?php if(isset($_SESSION['mail'])){ echo($_SESSION['mail'][2]);}?>" required>
            </div>
            <div>
                <label for="msg">Message :</label>
                <textarea id="msg" name="msg" required></textarea>
            </div>
            <div class="button">
                <button type="submit" onclick="Verif()">Envoyer le message</button>
            </div>
        
        </form>
    </section>
    <?php
    require("Php/footer.php");
    ?>
</body>
</html>