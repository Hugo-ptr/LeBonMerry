<?php
require("bddData.php");
   $dsn="mysql:dbname=".BASE.";host=".SERVER;
   try{
       $connexion=new PDO($dsn,USER,PASSWD);
   }
   catch(PDOException $e){
       printf("Échec de la connexion : %s\n", $e->getMessage());
       exit();
   }
?>