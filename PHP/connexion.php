<?php
session_start();

    include_once "config.php";
        if(isset($_POST['btn'])){
            $psd= mysqli_real_escape_string($bdd,$_POST['pseudo']);
            $mdp= mysqli_real_escape_string($bdd,$_POST['password']);

            if(!empty($psd) and !empty($mdp)){
                $sql=mysqli_query($bdd, "SELECT * FROM users WHERE pseudo='$psd' AND mdp ='$mdp'" );

                if(mysqli_num_rows($sql)>0){
                    $_SESSION['pseudo'] = $psd;
                    header("location:../qcm.php");
                }else{
                    echo "Connexion impossible";
                }
            }
        }


?>