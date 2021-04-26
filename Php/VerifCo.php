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
    $sql="SELECT * from Login";
    foreach ($connexion->query($sql) as $row){
        echo "Nom: ".$row['PW'].". Prix: ".
           $row['PRIX']."€. Stock: ".
           $row['DESCRIP']."<br/>\n";
        if (($_POST['log']==$row['ID'])&&($_POST['pw']==$row['PW'])) {
            header('Location: ../index.php');
            $_SESSION['eta']="log";
            if ($row['ST']=="ADM") {
                $_SESSION['status']= "admin";
            }
            exit();
        } else {
            $_SESSION['eta']="unlog";
            header('Location: ../connexion.php');
        }      
    }
?>
</html>