<?php

    if(isset($_POST["btn"])){
        include_once "config.php";
        $psd= mysqli_real_escape_string($bdd,$_POST['pseudo']);
        $mail= mysqli_real_escape_string($bdd,$_POST['mail']);
        $mdp= mysqli_real_escape_string($bdd,$_POST['password']);

            if(!empty($psd) and !empty($mail) and !empty($mdp)){
                
               $sql=mysqli_query($bdd, "SELECT * FROM users WHERE mail='$mail'");

               if(mysqli_num_rows($sql) >0){
                   echo "Cette email existe dans la base";
               }else{
                   $sql2 = mysqli_query($bdd, "INSERT INTO users (pseudo, mail, mdp) VALUES ('$psd', '$mail', '$mdp')");

                   echo "inscription réussie, connectez-vous";
                   header ("refresh:3; url=../connexion.php");
               }

            }
    }
    
?>