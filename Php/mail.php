<?php
session_start();
    if ((isset($_POST['msg']))&&(isset($_POST['name']))&&(isset($_POST['mail']))) {
        $_SESSION['mail'][0]=1;
        $_SESSION['mail'][1]=htmlspecialchars($_POST['msg']);
        $_SESSION['mail'][2]=htmlspecialchars($_POST['mail']);
        $_SESSION['mail'][3]=htmlspecialchars($_POST['name']);
        mail("pointereau@eisti.eu","Information site",$_POST['msg'],$_POST['name']);
        header('Location: ../contact.php');
        exit();
    } else {
        $_SESSION['mail'][0]=0;
        $_SESSION['mail'][1]=$_POST['msg'];
        $_SESSION['mail'][2]=$_POST['mail'];
        $_SESSION['mail'][3]=$_POST['name'];
        header('Location: ../contact.php');
    }
?>